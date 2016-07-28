<?
$subject_val = "Re: [OMPI users] Mpirun don't execute";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 24 14:00:22 2008" -->
<!-- isoreceived="20080924180022" -->
<!-- sent="Wed, 24 Sep 2008 20:00:17 +0200" -->
<!-- isosent="20080924180017" -->
<!-- name="Santolo Felaco" -->
<!-- email="ahuramazda10_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mpirun don't execute" -->
<!-- id="5f76eef60809241100m62285e74xeac8abed13eb0d82_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2F81948C-6026-4A2C-9EEA-DA28D33CAD0A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mpirun don't execute<br>
<strong>From:</strong> Santolo Felaco (<em>ahuramazda10_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-24 14:00:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6725.php">Ralph Castain: "Re: [OMPI users] mca:base:select:( ess) No component selected!"</a>
<li><strong>Previous message:</strong> <a href="6723.php">Shafagh Jafer: "Re: [OMPI users] which gcc to compile openmpi with?"</a>
<li><strong>In reply to:</strong> <a href="6671.php">Jeff Squyres: "Re: [OMPI users] Mpirun don't execute"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I use SVN checkout. I have invoked :
<br>
<p>&nbsp;&nbsp;shell$ svn co <a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a> ompi
<br>
<p>I have reinstalled openmpi today.
<br>
<p><p>2008/9/22 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Exactly what version of Open MPI are you using?  You mentioned &quot;1.3&quot; -- did
</span><br>
<span class="quotelev1">&gt; you download a nightly tarball at some point, or do you have an SVN
</span><br>
<span class="quotelev1">&gt; checkout?  Since you have a development copy of Open MPI, it is possible
</span><br>
<span class="quotelev1">&gt; that your copy is simply broken (sorry; we *do* break the development head
</span><br>
<span class="quotelev1">&gt; every once in a while...).  Can you update?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that Josh just made some FT fixes on the trunk today that aren't on
</span><br>
<span class="quotelev1">&gt; the v1.3 branch yet; they'll likely take a day or three to get there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 22, 2008, at 5:03 PM, Santolo Felaco wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi, this is my  openmpi-default-hostfile:
</span><br>
<span class="quotelev2">&gt;&gt; 127.0.0.1 slots=2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I invoke comand CTRL+C the application is not killed.
</span><br>
<span class="quotelev2">&gt;&gt; With mpirun -np 1 uptime the comand is ever blocked.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The comand is blocked with any comand, also comands not existent.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2008/9/22 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 19, 2008, at 6:50 PM, Santolo Felaco wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi, I try to be clearer:
</span><br>
<span class="quotelev2">&gt;&gt; osa_at_libertas:~$ echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib:/home/osa/blcr/lib
</span><br>
<span class="quotelev2">&gt;&gt; osa_at_libertas:~$ echo $PATH
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/home/osa/blcr/bin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I compile the file with mpicc, then:
</span><br>
<span class="quotelev2">&gt;&gt; osa_at_libertas:~/prove/openmpi$ mpirun -np 2 es1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The comand is blocked. Don't run. CTRL+X  does not end the program.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Try ctrl-c -- that's usually the way to kill applications that appear to
</span><br>
<span class="quotelev2">&gt;&gt; have been hung.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is ps output:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; osa_at_libertas:~/prove/openmpi$ mpirun -np 2 es1 &amp;
</span><br>
<span class="quotelev2">&gt;&gt; [1] 6151
</span><br>
<span class="quotelev2">&gt;&gt; osa_at_libertas:~/prove/openmpi$ ps
</span><br>
<span class="quotelev2">&gt;&gt;  PID TTY          TIME CMD
</span><br>
<span class="quotelev2">&gt;&gt;  6135 pts/2    00:00:00 bash
</span><br>
<span class="quotelev2">&gt;&gt;  6151 pts/2    00:00:00 mpirun
</span><br>
<span class="quotelev2">&gt;&gt;  6153 pts/2    00:00:00 ssh
</span><br>
<span class="quotelev2">&gt;&gt;  6161 pts/2    00:00:00 ps
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What is your program doing?  Can you tell if it's getting past MPI_INIT,
</span><br>
<span class="quotelev2">&gt;&gt; or even launching at all?  Can you mpirun non-MPI applications, such as
</span><br>
<span class="quotelev2">&gt;&gt; &quot;hostname&quot; and &quot;uptime&quot;?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are you launching this es1 application locally or remotely?  From your
</span><br>
<span class="quotelev2">&gt;&gt; command line and previous description, I *assume* that it's local, but I see
</span><br>
<span class="quotelev2">&gt;&gt; an &quot;ssh&quot; in your ps output, possibly meaning that mpirun has launched the
</span><br>
<span class="quotelev2">&gt;&gt; application remotely (e.g., if you specified a default hostfile or
</span><br>
<span class="quotelev2">&gt;&gt; somesuch).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6724/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6725.php">Ralph Castain: "Re: [OMPI users] mca:base:select:( ess) No component selected!"</a>
<li><strong>Previous message:</strong> <a href="6723.php">Shafagh Jafer: "Re: [OMPI users] which gcc to compile openmpi with?"</a>
<li><strong>In reply to:</strong> <a href="6671.php">Jeff Squyres: "Re: [OMPI users] Mpirun don't execute"</a>
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
