<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 11 18:26:47 2006" -->
<!-- isoreceived="20060711222647" -->
<!-- sent="Tue, 11 Jul 2006 15:26:38 -0700" -->
<!-- isosent="20060711222638" -->
<!-- name="s anwar" -->
<!-- email="sanwar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] readline and mpirun" -->
<!-- id="3e3c86f90607111526g5cebbac2i15c62291092b7f5b_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AFB7396A_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> s anwar (<em>sanwar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-11 18:26:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1615.php">Greg Lindahl: "Re: [OMPI users] OMPI 1.1 build failure with Intel 9.0"</a>
<li><strong>Previous message:</strong> <a href="1613.php">Galen M. Shipman: "Re: [OMPI users] Problem with Openmpi 1.1"</a>
<li><strong>In reply to:</strong> <a href="1612.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] readline and mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1616.php">Ralph Castain: "Re: [OMPI users] readline and mpirun"</a>
<li><strong>Reply:</strong> <a href="1616.php">Ralph Castain: "Re: [OMPI users] readline and mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff:
<br>
<p>I've tried my application with MPICH2 and OpenMPI only. The readline stuff
<br>
works in OpenMPI as long as I don't start my application with mpirun. It
<br>
does not work in MPICH2 irrespective of whether I start my application with
<br>
mpirun or not.
<br>
<p>My application starts on a workstation and spawns slave processes on cluster
<br>
nodes. The application provides an interactive command shell and provides
<br>
some GUI functionality using X.
<br>
<p>Do you know how bad is the MPI_Comm_spawn issue if I don't start my
<br>
application via an mpirun?
<br>
<p>Thanks.
<br>
Saadat.
<br>
<p>On 7/11/06, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Sorry for not replying earlier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is likely that Open MPI won't work properly in this situation -- Open
</span><br>
<span class="quotelev1">&gt; MPI provides basic I/O forwarding.  I don't know if curses-based or
</span><br>
<span class="quotelev1">&gt; readline-based applications will work through our forwarding.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you know if this application works with other MPI implementations?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] *On
</span><br>
<span class="quotelev1">&gt; Behalf Of *s anwar
</span><br>
<span class="quotelev1">&gt; *Sent:* Friday, July 07, 2006 12:46 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* [OMPI users] readline and mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  When I run my MPI enabled application via mpirun, my application
</span><br>
<span class="quotelev1">&gt; command-prompt looses its readline editing capability. I was wondering if
</span><br>
<span class="quotelev1">&gt; there is workaround.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; Saadat.
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1614/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1615.php">Greg Lindahl: "Re: [OMPI users] OMPI 1.1 build failure with Intel 9.0"</a>
<li><strong>Previous message:</strong> <a href="1613.php">Galen M. Shipman: "Re: [OMPI users] Problem with Openmpi 1.1"</a>
<li><strong>In reply to:</strong> <a href="1612.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] readline and mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1616.php">Ralph Castain: "Re: [OMPI users] readline and mpirun"</a>
<li><strong>Reply:</strong> <a href="1616.php">Ralph Castain: "Re: [OMPI users] readline and mpirun"</a>
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
