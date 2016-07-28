<?
$subject_val = "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  2 11:29:40 2012" -->
<!-- isoreceived="20120302162940" -->
<!-- sent="Fri, 2 Mar 2012 09:29:31 -0700" -->
<!-- isosent="20120302162931" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes" -->
<!-- id="7686828E-8524-473C-947C-761D4BAB2689_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F50977C.26880.208EC2AD_at_localhost" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-02 11:29:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18668.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Previous message:</strong> <a href="18666.php">Prentice Bisbal: "Re: [OMPI users] Simple question on GRID"</a>
<li><strong>In reply to:</strong> <a href="18662.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18668.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We'll take a look at the prefix behavior. As to the btl, you can always just force it: for example, -mca btl sm,self,openib would restrict it to shared memory and IB.
<br>
<p><p>On Mar 2, 2012, at 7:48 AM, Yiguang Yan wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff, Ralph--
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please let me follow the thread, here are what I observed:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (All with the same test script test.bash I post in my previous emails, so run with app file fed to mpirun command.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (1) If I put the --prefix in the app file, on each line of it, it works fine as Jeff said.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (2) Since in the manual, it is said that the full path of mpirun is the same as setting &quot;--prefix&quot;. However, with app file, 
</span><br>
<span class="quotelev1">&gt; this is not the case. Without &quot;--prefix&quot; on each line of the app file, the full path of mpirun does not work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (3) With &quot;--prefix $adinahome&quot; set on each line of the app file, it is exclusively put, on each node, the 
</span><br>
<span class="quotelev1">&gt; $adinahome/bin into the PATH, and $adinahome/lib into the LD_LIBRARY_PATH(not the $adinahome/lib64 as said 
</span><br>
<span class="quotelev1">&gt; in mpirun manual(v1.4.x)). The envars $PATH and $LD_LIBARARY_PATH set in test.bash script only affect the 
</span><br>
<span class="quotelev1">&gt; envars on the submitting node(gulftown in my case). No $PATH or $LD_LIBRARY_PATH is passed to slave nodes 
</span><br>
<span class="quotelev1">&gt; even if I use &quot;-x PATH -x LD_LIBRARY_PATH&quot;, either fed to mpirun or put on each line of the app file. I am not sure 
</span><br>
<span class="quotelev1">&gt; if this is intended, since &quot;--prefix&quot; overwrite the effect of &quot;-x&quot; option, this is different from what I see from the mpirun 
</span><br>
<span class="quotelev1">&gt; man page.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have another question about the btl used for communication. I noticed that rsh is using the tcp for connection, I 
</span><br>
<span class="quotelev1">&gt; understand that tcp may be used for initial connection, but how can I know that openib(infiniband) btl is used for my 
</span><br>
<span class="quotelev1">&gt; data communication? Any explicit way?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Yiguang
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18668.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Previous message:</strong> <a href="18666.php">Prentice Bisbal: "Re: [OMPI users] Simple question on GRID"</a>
<li><strong>In reply to:</strong> <a href="18662.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18668.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
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
