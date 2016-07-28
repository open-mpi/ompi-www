<?
$subject_val = "Re: [OMPI users] conflict among differenv MPIs";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 21 21:52:41 2008" -->
<!-- isoreceived="20080922015241" -->
<!-- sent="Sun, 21 Sep 2008 19:52:36 -0600" -->
<!-- isosent="20080922015236" -->
<!-- name="Brian Harker" -->
<!-- email="brian.harker_at_[hidden]" -->
<!-- subject="Re: [OMPI users] conflict among differenv MPIs" -->
<!-- id="48535380809211852x44280c46tede3bf7174b089e8_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="959060.22087.qm_at_web34801.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] conflict among differenv MPIs<br>
<strong>From:</strong> Brian Harker (<em>brian.harker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-21 21:52:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6646.php">Shafagh Jafer: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>Previous message:</strong> <a href="6644.php">Shafagh Jafer: "[OMPI users] conflict among differenv MPIs"</a>
<li><strong>In reply to:</strong> <a href="6644.php">Shafagh Jafer: "[OMPI users] conflict among differenv MPIs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6646.php">Shafagh Jafer: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>Reply:</strong> <a href="6646.php">Shafagh Jafer: "Re: [OMPI users] conflict among differenv MPIs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just specify where each individual MPI distribution's stuff is on the
<br>
command line when you compile with mpicc *.c -I$MPICH_HOME/include or
<br>
mpicc *.c -I$OPENMPI_HOME/include where the &quot;HOME&quot; directories were
<br>
specified with --prefix= when you installed.  Hope this helps.  This
<br>
works for me.  Hope this helps.  Cheers!
<br>
<p>On Sun, Sep 21, 2008 at 7:37 PM, Shafagh Jafer &lt;barfy27_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I have both openmpi and MPICH on my cluster, the problem is that mpi.h of
</span><br>
<span class="quotelev1">&gt; MPICH is in /usr/local/include and I dont have permission to rename or
</span><br>
<span class="quotelev1">&gt; remove it from there. In my source code I am including the mpi.h of openmpi
</span><br>
<span class="quotelev1">&gt; and this works fine, but then mpi.h itself includes mpicxx.h which it again
</span><br>
<span class="quotelev1">&gt; includes openmpi's mpi.h and this is my problem becase the system goes and
</span><br>
<span class="quotelev1">&gt; takes the mpi.h file of MPICH which is in /usr/local/include and thus i get
</span><br>
<span class="quotelev1">&gt; errors segfaults! I am using mpicc wrapper to compile my code and i think my
</span><br>
<span class="quotelev1">&gt; problem is due to having other mpi.h files. Am I right?? What should I do to
</span><br>
<span class="quotelev1">&gt; make /usr/local/include in-accesible from my code??? Please help me!
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
<p><p><p><pre>
-- 
Cheers,
Brian
brian.harker_at_[hidden]
&quot;In science, there is only physics; all the rest is stamp-collecting.&quot;
 -Ernest Rutherford
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6646.php">Shafagh Jafer: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>Previous message:</strong> <a href="6644.php">Shafagh Jafer: "[OMPI users] conflict among differenv MPIs"</a>
<li><strong>In reply to:</strong> <a href="6644.php">Shafagh Jafer: "[OMPI users] conflict among differenv MPIs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6646.php">Shafagh Jafer: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>Reply:</strong> <a href="6646.php">Shafagh Jafer: "Re: [OMPI users] conflict among differenv MPIs"</a>
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
