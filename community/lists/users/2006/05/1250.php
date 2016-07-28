<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 17 11:37:00 2006" -->
<!-- isoreceived="20060517153700" -->
<!-- sent="Wed, 17 May 2006 11:36:48 -0400" -->
<!-- isosent="20060517153648" -->
<!-- name="Gurhan Ozen" -->
<!-- email="gurhan.ozen_at_[hidden]" -->
<!-- subject="[OMPI users] Fwd:  Open MPI and OpenIB" -->
<!-- id="5849f1820605170836qcf2e207w834ac21cd6f0ad83_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5849f1820605150614h3efc7a9ej59be8b9bf28d98aa_at_mail.gmail.com" -->
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
<strong>From:</strong> Gurhan Ozen (<em>gurhan.ozen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-17 11:36:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1251.php">Brian Barrett: "Re: [OMPI users] Open MPI and OpenIB"</a>
<li><strong>Previous message:</strong> <a href="1249.php">Brock Palen: "Re: [OMPI users] tm interface"</a>
<li><strong>In reply to:</strong> <a href="1241.php">Gurhan Ozen: "Re: [OMPI users] Open MPI and OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1251.php">Brian Barrett: "Re: [OMPI users] Open MPI and OpenIB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Either gmail or  ompi users list is borked, i am resending this
<br>
since it hasn't showed up in the list yet after 2 days..
<br>
<p>Thanks,
<br>
gurhan
<br>
<p>---------- Forwarded message ----------
<br>
From: Gurhan Ozen &lt;gurhan.ozen_at_[hidden]&gt;
<br>
Date: May 15, 2006 9:14 AM
<br>
Subject: Re: [OMPI users] Open MPI and OpenIB
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
<p><p>Jeff, George, Brian thanks for your inputs in this.
<br>
<p>I did &quot;kind of&quot; get openib working. Different revisions of kernel was
<br>
running on both boxes, getting them running on the very same revisions
<br>
of kernel and recompiling open-mpi with that rev. of kernel got me
<br>
hello_world program running over openib stack.
<br>
<p>However, most MPI_* functions , such as MPI_Isend(), MPI_Barrier() are
<br>
not working. For each one of them, i get the same error:
<br>
<p>[hostname:11992] *** An error occurred in MPI_Isend
<br>
[hostname:11992] *** on communicator MPI_COMM_WORLD
<br>
[hostname:11992] *** MPI_ERR_INTERN: internal error
<br>
[hostname:11992] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>[hostname:11998] *** An error occurred in MPI_Barrier
<br>
[hostname:11998] *** on communicator MPI_COMM_WORLD
<br>
[hostname:11998] *** MPI_ERR_INTERN: internal error
<br>
[hostname:11998] *** MPI_ERRORS_ARE_FATAL (goodby
<br>
<p>[hostname:01916] *** An error occurred in MPI_Send
<br>
[hostname:01916] *** on communicator MPI_COMM_WORLD
<br>
[hostname:01916] *** MPI_ERR_INTERN: internal error
<br>
[hostname:01916] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>This is not just happening over network, but also locally. I am
<br>
inclined to think that i miss some compilation flags or whatever.. I
<br>
have tried this with  openmpi-1.1a4 version as well , but kept on
<br>
getting the same errors.
<br>
<p>Questions of the day:
<br>
1- Does anyone know why I might be getting this errors?
<br>
2- I couldn't find any &quot;free&quot; debuggers for debugging open-mpi
<br>
programs, does anyone know of any? Are there any tricks to use gdb ,
<br>
at least to debug locally running mpi programs?
<br>
<p>Thanks again,
<br>
Gurhan
<br>
<p>On 5/12/06, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Gurhan Ozen
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Thursday, May 11, 2006 4:11 PM
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Open MPI and OpenIB
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; At any rate though, --mca btl ib,self looks like the traffic goes over
</span><br>
<span class="quotelev2">&gt; &gt; ethernet device .. I couldn't find any documentation on the &quot;self&quot;
</span><br>
<span class="quotelev2">&gt; &gt; argument of mca, does it mean to explore alternatives if the desired
</span><br>
<span class="quotelev2">&gt; &gt; btl (in this case ib) doesn't work?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that Open MPI still does use TCP for &quot;setup&quot; information; a bunch
</span><br>
<span class="quotelev1">&gt; of data is passed around via mpirun and MPI_INIT for all the processes
</span><br>
<span class="quotelev1">&gt; to find each other, etc.  Similar control messages get passed around
</span><br>
<span class="quotelev1">&gt; during MPI_FINALIZE as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is likely the TCP traffice that you are seeing.  However, rest
</span><br>
<span class="quotelev1">&gt; assured that the btl MCA parameter will unequivocally set the network
</span><br>
<span class="quotelev1">&gt; that MPI traffic will use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've updated the on-line FAQ with regards to the &quot;self&quot; BTL module.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And finally, a man page is available for mpirun in the [not yet
</span><br>
<span class="quotelev1">&gt; released] Open MPI 1.1 (see
</span><br>
<span class="quotelev1">&gt; <a href="http://svn.open-mpi.org/svn/ompi/trunk/orte/tools/orterun/orterun.1">http://svn.open-mpi.org/svn/ompi/trunk/orte/tools/orterun/orterun.1</a>).
</span><br>
<span class="quotelev1">&gt; It should be pretty much the same for 1.0.  One notable difference is I
</span><br>
<span class="quotelev1">&gt; just recently added a -nolocal option (not yet on the trunk, but likely
</span><br>
<span class="quotelev1">&gt; will be in the not-distant future) that does not exist in 1.0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1251.php">Brian Barrett: "Re: [OMPI users] Open MPI and OpenIB"</a>
<li><strong>Previous message:</strong> <a href="1249.php">Brock Palen: "Re: [OMPI users] tm interface"</a>
<li><strong>In reply to:</strong> <a href="1241.php">Gurhan Ozen: "Re: [OMPI users] Open MPI and OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1251.php">Brian Barrett: "Re: [OMPI users] Open MPI and OpenIB"</a>
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
