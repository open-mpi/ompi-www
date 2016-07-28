<?
$subject_val = "Re: [OMPI users] libmpi.so.0 ERROR";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 25 08:11:08 2010" -->
<!-- isoreceived="20100225131108" -->
<!-- sent="Thu, 25 Feb 2010 08:11:03 -0500" -->
<!-- isosent="20100225131103" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libmpi.so.0 ERROR" -->
<!-- id="714CF408-8F4A-4ED7-BA0F-DF28A816162C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="907921.80712.qm_at_web8808.mail.in.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] libmpi.so.0 ERROR<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-25 08:11:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12155.php">Brian Budge: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<li><strong>Previous message:</strong> <a href="12153.php">Abhra Paul: "[OMPI users] libmpi.so.0 ERROR"</a>
<li><strong>In reply to:</strong> <a href="12153.php">Abhra Paul: "[OMPI users] libmpi.so.0 ERROR"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This typically means that either libmpi.so does not exist on the machine that you are trying to run it on, or it cannot be found.  You may need to extend the value of the LD_LIBRARY_PATH environment variable with the lib directory of your Open MPI installation (don't just overwrite it -- check first to see if there's something else already in there, and if so, prefix it).
<br>
<p>For example (Bourne-flavored shells):
<br>
<p>$ LD_LIBRARY_PATH=/opt/openmpi/lib:$LD_LIBRARY_PATH
<br>
$ export LD_LIBRARY_PATH
<br>
<p>For C-flavored shells:
<br>
<p>% setenv LD_LIBRARY_PATH /opt/openmpi/lib:$LD_LIBRARY_PATH
<br>
<p>(both of these assume that there is already a value in LD_LIBRARY_PATH)
<br>
<p>You might be able to configure Open MPI with the --enable-mpirun-prefix-by-default configure switch, which, if you have Open MPI installed in the same location on all nodes, takes away some of this drudgery by prefixing LD_LIBRARY_PATH and PATH for you.
<br>
<p><p><p>On Feb 25, 2010, at 4:33 AM, Abhra Paul wrote:
<br>
<p><span class="quotelev1">&gt; Respected Users
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have installed openmpi successfully also compiled the hello_world program with mpicc. But when I am running the exectable with the command mpirun -np 2 hello_mpi(hello_mpi is the executable) in my desktop pc(dual-core processor) is giving an error like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hello_mpi: error while loading shared libraries: libmpi.so.0: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; hello_mpi: error while loading shared libraries: libmpi.so.0: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please suggest me what I have to do to solve it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Abhra Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       The INTERNET now has a personality. YOURS! See your Yahoo! Homepage. <a href="http://in.yahoo.com/">http://in.yahoo.com/</a>
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
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12155.php">Brian Budge: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<li><strong>Previous message:</strong> <a href="12153.php">Abhra Paul: "[OMPI users] libmpi.so.0 ERROR"</a>
<li><strong>In reply to:</strong> <a href="12153.php">Abhra Paul: "[OMPI users] libmpi.so.0 ERROR"</a>
<!-- nextthread="start" -->
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
