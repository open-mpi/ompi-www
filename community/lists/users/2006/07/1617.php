<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 11 19:23:18 2006" -->
<!-- isoreceived="20060711232318" -->
<!-- sent="Tue, 11 Jul 2006 16:21:27 -0700" -->
<!-- isosent="20060711232127" -->
<!-- name="s anwar" -->
<!-- email="sanwar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] readline and mpirun" -->
<!-- id="3e3c86f90607111621n71ac5c6fg35f342909a091ce_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C0D9890B.330E%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-07-11 19:21:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1618.php">Manal Helal: "Re: [OMPI users] OpenMPI, debugging, and Portland Group's"</a>
<li><strong>Previous message:</strong> <a href="1616.php">Ralph Castain: "Re: [OMPI users] readline and mpirun"</a>
<li><strong>In reply to:</strong> <a href="1616.php">Ralph Castain: "Re: [OMPI users] readline and mpirun"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks.
<br>
Saadat.
<br>
<p><p>On 7/11/06, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I'm afraid that the current comm_spawn system really can't run unless
</span><br>
<span class="quotelev1">&gt; started via mpirun. I'm going to take a shot at fixing it in the near future
</span><br>
<span class="quotelev1">&gt; and can let you know when that is accomplished, but it might take a little
</span><br>
<span class="quotelev1">&gt; while before I get the time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/11/06 4:26 PM, &quot;s anwar&quot; &lt;sanwar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Jeff:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tried my application with MPICH2 and OpenMPI only. The readline stuff
</span><br>
<span class="quotelev1">&gt; works in OpenMPI as long as I don't start my application with mpirun. It
</span><br>
<span class="quotelev1">&gt; does not work in MPICH2 irrespective of whether I start my application with
</span><br>
<span class="quotelev1">&gt; mpirun or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My application starts on a workstation and spawns slave processes on
</span><br>
<span class="quotelev1">&gt; cluster nodes. The application provides an interactive command shell and
</span><br>
<span class="quotelev1">&gt; provides some GUI functionality using X.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you know how bad is the MPI_Comm_spawn issue if I don't start my
</span><br>
<span class="quotelev1">&gt; application via an mpirun?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; Saadat.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/11/06, *Jeff Squyres (jsquyres)* &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for not replying earlier.
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
<span class="quotelev1">&gt; *From:* users-bounces_at_[hidden] [mailto: users-bounces_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden]&gt; ] *On Behalf Of *s anwar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; When I run my MPI enabled application via mpirun, my application
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1617/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1618.php">Manal Helal: "Re: [OMPI users] OpenMPI, debugging, and Portland Group's"</a>
<li><strong>Previous message:</strong> <a href="1616.php">Ralph Castain: "Re: [OMPI users] readline and mpirun"</a>
<li><strong>In reply to:</strong> <a href="1616.php">Ralph Castain: "Re: [OMPI users] readline and mpirun"</a>
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
