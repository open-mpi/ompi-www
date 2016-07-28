<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul  4 03:53:28 2006" -->
<!-- isoreceived="20060704075328" -->
<!-- sent="Tue, 4 Jul 2006 15:53:26 +0800" -->
<!-- isosent="20060704075326" -->
<!-- name="Chengwen Chen" -->
<!-- email="chenchengwen_at_[hidden]" -->
<!-- subject="[OMPI users] error in running openmpi on remote node" -->
<!-- id="c5e12fe60607040053s5c91a99j54c47624d974d391_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>From:</strong> Chengwen Chen (<em>chenchengwen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-04 03:53:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1538.php">Manal Helal: "[OMPI users] runtime error"</a>
<li><strong>Previous message:</strong> <a href="1536.php">Manal Helal: "[OMPI users] Where can I get mpi api reference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1539.php">kefeng chen: "Re: [OMPI users] error in running openmpi on remote node"</a>
<li><strong>Reply:</strong> <a href="1539.php">kefeng chen: "Re: [OMPI users] error in running openmpi on remote node"</a>
<li><strong>Reply:</strong> <a href="1544.php">Brian Barrett: "Re: [OMPI users] error in running openmpi on remote node"</a>
<li><strong>Maybe reply:</strong> <a href="1564.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] error in running openmpi on remote node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear openmpi users,
<br>
<p>I am using openmpi-1.0.2 on Redhat linux. I can succussfully run mpirun in
<br>
single PC with 2 np. But fail in remote node. Can you give me some advices?
<br>
thank you very much in advance.
<br>
<p>[say_at_wolf45 tmp]$ mpirun -np 2 /tmp/test.x
<br>
<p>[say_at_wolf45 tmp]$ mpirun -np 2 --host wolf45,wolf46 /tmp/test.x
<br>
say_at_wolf46's password:
<br>
orted: Command not found.
<br>
[wolf45:11357] ERROR: A daemon on node wolf46 failed to start as expected.
<br>
[wolf45:11357] ERROR: There may be more information available from
<br>
[wolf45:11357] ERROR: the remote shell (see above).
<br>
[wolf45:11357] ERROR: The daemon exited unexpectedly with status 1.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1537/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1538.php">Manal Helal: "[OMPI users] runtime error"</a>
<li><strong>Previous message:</strong> <a href="1536.php">Manal Helal: "[OMPI users] Where can I get mpi api reference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1539.php">kefeng chen: "Re: [OMPI users] error in running openmpi on remote node"</a>
<li><strong>Reply:</strong> <a href="1539.php">kefeng chen: "Re: [OMPI users] error in running openmpi on remote node"</a>
<li><strong>Reply:</strong> <a href="1544.php">Brian Barrett: "Re: [OMPI users] error in running openmpi on remote node"</a>
<li><strong>Maybe reply:</strong> <a href="1564.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] error in running openmpi on remote node"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
