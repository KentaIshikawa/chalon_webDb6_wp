// scripts/git-auto.js
const { execSync } = require("child_process");

// 現在時刻を整形
const now = new Date();
const timestamp = now.toISOString().replace("T", " ").split(".")[0]; // 例: 2025-10-29 01:23:45

// コミットメッセージ
const msg = `auto commit: ${timestamp}`;

console.log(msg);

try {
  execSync("git add .", { stdio: "inherit" });
  execSync(`git commit -m "${msg}"`, { stdio: "inherit" });
  execSync("git push origin master", { stdio: "inherit" });
  console.log(`✅ Git push 完了！(${msg})`);
} catch (err) {
  console.error("⚠️ Git push に失敗しました:", err.message);
}