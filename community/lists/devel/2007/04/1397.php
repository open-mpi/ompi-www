<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr  3 15:58:16 2007" -->
<!-- isoreceived="20070403195816" -->
<!-- sent="Tue, 3 Apr 2007 16:57:53 -0400 (EDT)" -->
<!-- isosent="20070403205753" -->
<!-- name="pooja_at_[hidden]" -->
<!-- email="pooja_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level" -->
<!-- id="35551.130.207.5.93.1175633873.squirrel_at_webmail.cc.gatech.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CDF5F25E-A144-4CF6-9CDE-EC0CE8301DE2_at_cisco.com" -->
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
<strong>From:</strong> <a href="mailto:pooja_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20Is%20it%20possible%20to%20get%20BTL%20transport%20work%20directly%20with%20MPI%20level"><em>pooja_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-04-03 16:57:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1398.php">Jeff Squyres: "Re: [OMPI devel] Is it possible to get BTL transport work directly	with MPI level"</a>
<li><strong>Previous message:</strong> <a href="1396.php">Li-Ta Lo: "Re: [OMPI devel] Is it possible to get BTL transport work directly	with MPI level"</a>
<li><strong>In reply to:</strong> <a href="1393.php">Jeff Squyres: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1399.php">Jeff Squyres: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Reply:</strong> <a href="1399.php">Jeff Squyres: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
I need to find when the underlying network is free. Means I dont need to
<br>
go into the details of how MPi_send is implemented.
<br>
<p>What I want to know is when the MPI_Send is started .Or rather when MPi
<br>
does not use the underlying network.
<br>
<p>I need to find timing for
<br>
1) When the application issue send command
<br>
2)When Mpi actually issues send command
<br>
3) When does BTl perform atual transfer(send)
<br>
4)When doe send complete
<br>
5) Who was thr receiver.
<br>
etc. this was an example of MPi_send.
<br>
like this I need to know MPI_Isend,broadcast etc.
<br>
<p>I guess this can be done using PMPI.
<br>
But PMPI can do it during profile stages while I want all this data during
<br>
runtime.
<br>
So that I can improve the performance of the system while using that ideal
<br>
time.
<br>
<p>Well I/o used is Lustre (its ROMIO).
<br>
What I mean by I/O node is nodes that does input and ouput processing i.e
<br>
they write to lustre and compute node just transfer data to i/o node to
<br>
write it in Lustre.Compute node does not have memory at all.So when ever
<br>
they have something to write it gets transfered to I/o node.
<br>
and then I/o node does read and write.
<br>
<p><p>So when MPi_send is not issued the  the network(Infiniband interconnect)
<br>
can be used for some other transfer.
<br>
<p>Can anyone help me wih how to go abt tracing this at run time?
<br>
<p>Please help
<br>
Pooja
<br>
<p><p><p><p><p><p><p><p><p><span class="quotelev1">&gt; On Apr 3, 2007, at 9:07 AM, pooja_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Actually I am working on the course project in which I am running a
</span><br>
<span class="quotelev2">&gt;&gt; huge
</span><br>
<span class="quotelev2">&gt;&gt; computational intensive code.
</span><br>
<span class="quotelev2">&gt;&gt; I am running this code on cluster.
</span><br>
<span class="quotelev2">&gt;&gt; Now my work is to find out when does the process send control messages
</span><br>
<span class="quotelev2">&gt;&gt; (e.g. compute process to I/O  process indicating I/O data is ready)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By &quot;I/O&quot;, do you mean stdin/stdout/stderr, or other file I/O?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you mean stdin/stdout/stderr, this is handled by the IOF (I/O
</span><br>
<span class="quotelev1">&gt; Forwarding) framework/components in Open MPI.  It's somewhat
</span><br>
<span class="quotelev1">&gt; complicated, system-level code involving logically multiplexing data
</span><br>
<span class="quotelev1">&gt; sent across pipes to sockets (i.e., local process(es) to remote
</span><br>
<span class="quotelev1">&gt; process(es)).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you mean MPI-2 file I/O, you want to look at the ROMIO package; it
</span><br>
<span class="quotelev1">&gt; handles all the MPI-2 API for I/O.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or do you mean &quot;I/O&quot; such as normal MPI messages (such as those
</span><br>
<span class="quotelev1">&gt; generated by MPI_SEND and MPI_RECV)?  FWIW, we normally refer to
</span><br>
<span class="quotelev1">&gt; these as MPI messages, not really &quot;I/O&quot; (we typically reserve the
</span><br>
<span class="quotelev1">&gt; term &quot;I/O&quot; for file IO and/or stdin/stdout/stderr).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which do you mean?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and when does they send actual data (e.g I/O nodes fetching actual
</span><br>
<span class="quotelev2">&gt;&gt; data
</span><br>
<span class="quotelev2">&gt;&gt; that is to be transfered.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This seems to imply that you're talking about parallel/network
</span><br>
<span class="quotelev1">&gt; filesystems.  I have to admit that I'm now quite confused about what
</span><br>
<span class="quotelev1">&gt; you're asking for.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And I have to log the timing and duration in other file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you need to log the timing and duration of MPI calls, this is
</span><br>
<span class="quotelev1">&gt; pretty easy to do with the PMPI interface -- you can intercept all
</span><br>
<span class="quotelev1">&gt; MPI calls, log whatever information you want to log, invoke the
</span><br>
<span class="quotelev1">&gt; underlying MPI function to do the real work, and then log the duration.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For this I need to know the States of Open MPi (Control messges)
</span><br>
<span class="quotelev2">&gt;&gt; So that I can simply put print statements in Open MPi code and find
</span><br>
<span class="quotelev2">&gt;&gt; out
</span><br>
<span class="quotelev2">&gt;&gt; how it works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would [strongly] advise using a debugger.  Printf statements will
</span><br>
<span class="quotelev1">&gt; only take you so far, and can be quite confusing in a parallel
</span><br>
<span class="quotelev1">&gt; scenario -- especially when they can alter the timing of the system
</span><br>
<span class="quotelev1">&gt; (i.e., Heisenburg kinds of effects).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For this reason I was asking to know the state changes or atleast
</span><br>
<span class="quotelev2">&gt;&gt; the way
</span><br>
<span class="quotelev2">&gt;&gt; to find it out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm still not clear on what state changes you're asking about.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  From this e-mail and your prior e-mails, it *seems* like you're
</span><br>
<span class="quotelev1">&gt; asking about how data gets from MPI_SEND in one process to MPI_RECV
</span><br>
<span class="quotelev1">&gt; in another process.  Is that right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If so, I would not characterize the code that does this as a state
</span><br>
<span class="quotelev1">&gt; machine in the traditional sense.  Sure, as a computer program, it
</span><br>
<span class="quotelev1">&gt; technically *is* a state machine that changes states according to
</span><br>
<span class="quotelev1">&gt; assembly instructions, registers, etc., but we did not use generic
</span><br>
<span class="quotelev1">&gt; state machine abstractions throughout the code base.  In many places,
</span><br>
<span class="quotelev1">&gt; there's simply a linear sequence of events -- not a re-entrant state
</span><br>
<span class="quotelev1">&gt; machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So if you're asking how a user message gets from MPI_SEND in one
</span><br>
<span class="quotelev1">&gt; process to MPI_RECV in another, we can describe that (it's a very
</span><br>
<span class="quotelev1">&gt; complicated answer that depends on many factors, actually -- it is
</span><br>
<span class="quotelev1">&gt; *not* a straightforward answer, not only because OMPI deals with many
</span><br>
<span class="quotelev1">&gt; device/network types, but also because there can be many variables
</span><br>
<span class="quotelev1">&gt; decided at run time that determine how a message is sent from a
</span><br>
<span class="quotelev1">&gt; process to a peer).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So before we go any further -- can you, as precisely as possible,
</span><br>
<span class="quotelev1">&gt; describe exactly what information you're looking for?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also my proff asked me to look into BTl transport layer to be used
</span><br>
<span class="quotelev2">&gt;&gt; with
</span><br>
<span class="quotelev2">&gt;&gt; MPi Api.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I described that in a prior e-mail.
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
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1398.php">Jeff Squyres: "Re: [OMPI devel] Is it possible to get BTL transport work directly	with MPI level"</a>
<li><strong>Previous message:</strong> <a href="1396.php">Li-Ta Lo: "Re: [OMPI devel] Is it possible to get BTL transport work directly	with MPI level"</a>
<li><strong>In reply to:</strong> <a href="1393.php">Jeff Squyres: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1399.php">Jeff Squyres: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Reply:</strong> <a href="1399.php">Jeff Squyres: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
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
