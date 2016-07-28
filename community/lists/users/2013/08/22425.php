<?
$subject_val = "Re: [OMPI users] OpenMPI 1.7.2 and CLAPACK libs discovery";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  2 11:06:13 2013" -->
<!-- isoreceived="20130802150613" -->
<!-- sent="Fri, 2 Aug 2013 08:05:56 -0700" -->
<!-- isosent="20130802150556" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.7.2 and CLAPACK libs discovery" -->
<!-- id="F996DAA4-783E-47FF-A502-E098B2E5B93D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2ae0d9c61e6ea3e525523d302cbb849c_at_imapproxy.vub.ac.be" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.7.2 and CLAPACK libs discovery<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-02 11:05:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22426.php">RoboBeans: "[OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<li><strong>Previous message:</strong> <a href="22424.php">Ralph Castain: "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>In reply to:</strong> <a href="22423.php">gpaulus: "[OMPI users] OpenMPI 1.7.2 and CLAPACK libs discovery"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Guess I'm confused - I'm not aware of OMPI using CLAPACK. Why would you expect our configure to link to it?
<br>
<p><p>On Aug 1, 2013, at 6:37 AM, gpaulus &lt;gpaulus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello All:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to &quot;configure&quot; OpenMPI 1.7.2 on a 64 bit Linux platform (Scientific Linux 6.4, kernel 2.6.32-358.14.1.el6.x86_64). Configure is able to find clapack.h in /usr/local/include but does not find the library libclapack.so (or libclapack.a) stored in /usr/local/lib64. I have put LDFLAGS=&quot;-L/usr/local/lib64&quot; in the configure script, to no avail. I also put /usr/local/lib64 in LD_LIBRARY_PATH at the shell level but to no avail as well; adding an entry in /etc/ld.so.conf.d did not help. Even copying the library to /usr/lib64 did not help configure. And although the header file was found in /usr/local/include, putting the library in /usr/local/lib did not improve things.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would be grateful to whomever can help me understand the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In attachment:
</span><br>
<span class="quotelev1">&gt; gnubuild.bz2: the script invoking configure with all the options
</span><br>
<span class="quotelev1">&gt; config.out.bz2: the output of the configure run
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Guy Paulus
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;gnubuild.bz2&gt;&lt;config.out.bz2&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="22426.php">RoboBeans: "[OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<li><strong>Previous message:</strong> <a href="22424.php">Ralph Castain: "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>In reply to:</strong> <a href="22423.php">gpaulus: "[OMPI users] OpenMPI 1.7.2 and CLAPACK libs discovery"</a>
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
