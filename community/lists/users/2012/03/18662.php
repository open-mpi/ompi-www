<?
$subject_val = "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  2 09:48:36 2012" -->
<!-- isoreceived="20120302144836" -->
<!-- sent="Fri, 2 Mar 2012 09:48:44 -0500" -->
<!-- isosent="20120302144844" -->
<!-- name="Yiguang Yan" -->
<!-- email="yanyg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes" -->
<!-- id="4F50977C.26880.208EC2AD_at_localhost" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI users] orted daemon not found! --- environment not passed to slave nodes" -->
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
<strong>Subject:</strong> Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes<br>
<strong>From:</strong> Yiguang Yan (<em>yanyg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-02 09:48:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18663.php">George Bosilca: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18661.php">Jeffrey Squyres: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Maybe in reply to:</strong> <a href="18649.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18667.php">Ralph Castain: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Reply:</strong> <a href="18667.php">Ralph Castain: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Reply:</strong> <a href="18668.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff, Ralph--
<br>
<p>Please let me follow the thread, here are what I observed:
<br>
<p>(All with the same test script test.bash I post in my previous emails, so run with app file fed to mpirun command.)
<br>
<p>(1) If I put the --prefix in the app file, on each line of it, it works fine as Jeff said.
<br>
<p>(2) Since in the manual, it is said that the full path of mpirun is the same as setting &quot;--prefix&quot;. However, with app file, 
<br>
this is not the case. Without &quot;--prefix&quot; on each line of the app file, the full path of mpirun does not work.
<br>
<p>(3) With &quot;--prefix $adinahome&quot; set on each line of the app file, it is exclusively put, on each node, the 
<br>
$adinahome/bin into the PATH, and $adinahome/lib into the LD_LIBRARY_PATH(not the $adinahome/lib64 as said 
<br>
in mpirun manual(v1.4.x)). The envars $PATH and $LD_LIBARARY_PATH set in test.bash script only affect the 
<br>
envars on the submitting node(gulftown in my case). No $PATH or $LD_LIBRARY_PATH is passed to slave nodes 
<br>
even if I use &quot;-x PATH -x LD_LIBRARY_PATH&quot;, either fed to mpirun or put on each line of the app file. I am not sure 
<br>
if this is intended, since &quot;--prefix&quot; overwrite the effect of &quot;-x&quot; option, this is different from what I see from the mpirun 
<br>
man page.
<br>
<p>I have another question about the btl used for communication. I noticed that rsh is using the tcp for connection, I 
<br>
understand that tcp may be used for initial connection, but how can I know that openib(infiniband) btl is used for my 
<br>
data communication? Any explicit way?
<br>
<p>Thanks,
<br>
Yiguang
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18663.php">George Bosilca: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18661.php">Jeffrey Squyres: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Maybe in reply to:</strong> <a href="18649.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18667.php">Ralph Castain: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Reply:</strong> <a href="18667.php">Ralph Castain: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Reply:</strong> <a href="18668.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
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
