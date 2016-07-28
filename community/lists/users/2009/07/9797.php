<?
$subject_val = "Re: [OMPI users] Error connecting to nodes ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  2 04:40:51 2009" -->
<!-- isoreceived="20090702084051" -->
<!-- sent="Thu, 02 Jul 2009 17:40:38 +0900" -->
<!-- isosent="20090702084038" -->
<!-- name="Ashika Umanga Umagiliya" -->
<!-- email="aumanga_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error connecting to nodes ?" -->
<!-- id="4A4C7286.70006_at_biggjapan.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A4C6BEC.4070306_at_aist.go.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error connecting to nodes ?<br>
<strong>From:</strong> Ashika Umanga Umagiliya (<em>aumanga_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-02 04:40:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9798.php">Jeff Squyres: "Re: [OMPI users] quadrics support?"</a>
<li><strong>Previous message:</strong> <a href="9796.php">Raymond Wan: "Re: [OMPI users] Error connecting to nodes ?"</a>
<li><strong>In reply to:</strong> <a href="9796.php">Raymond Wan: "Re: [OMPI users] Error connecting to nodes ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Raymond ,
<br>
<p>Thanks for the tips,
<br>
I configured out the problem, its with the .bashrc in the nodes.
<br>
When logged in to Bash in 'non-interactive'  mode, I figured out that 
<br>
&quot;$MPI\bin&quot; folder is missing  in the PATH.
<br>
I edited .bashrc in every node so that the &quot;$MPI_HOME/bin&quot; is added to PATH.
<br>
<p>Setting the PATH in /etc/profile wont help to run MPI.(well.. at least 
<br>
in Debian )
<br>
<p>Thanks and best regards,
<br>
umanga
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Ashika,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashika Umanga Umagiliya wrote:
</span><br>
<span class="quotelev2">&gt;&gt; In my MPI environment I have 3 Debian machines all setup openMPI in 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openMPI,
</span><br>
<span class="quotelev2">&gt;&gt; configured PATH and LD_LIBRARY_PATH correctly.
</span><br>
<span class="quotelev2">&gt;&gt; And I have also configured passwordless SSH login in each node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But when I execute my application , it gives following error , what 
</span><br>
<span class="quotelev2">&gt;&gt; seems to be the problem ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you check whether or not mpirun works on a single machine (i.e., 
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 -host localhost mandel)?  Did you install openmpi from 
</span><br>
<span class="quotelev1">&gt; source or via the apt-get package manager?  I used the pkg mgr and 
</span><br>
<span class="quotelev1">&gt; orted is located at /usr/bin/orted -- do you have this file on all 3 
</span><br>
<span class="quotelev1">&gt; systems?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And this is Debian stable?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ray
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
<li><strong>Next message:</strong> <a href="9798.php">Jeff Squyres: "Re: [OMPI users] quadrics support?"</a>
<li><strong>Previous message:</strong> <a href="9796.php">Raymond Wan: "Re: [OMPI users] Error connecting to nodes ?"</a>
<li><strong>In reply to:</strong> <a href="9796.php">Raymond Wan: "Re: [OMPI users] Error connecting to nodes ?"</a>
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
