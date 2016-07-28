<?
$subject_val = "Re: [OMPI users] Roadrunner blasts past the petaflop mark with Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 23 10:21:03 2010" -->
<!-- isoreceived="20100623142103" -->
<!-- sent="Wed, 23 Jun 2010 10:20:58 -0400" -->
<!-- isosent="20100623142058" -->
<!-- name="Durga Choudhury" -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Roadrunner blasts past the petaflop mark with Open MPI" -->
<!-- id="AANLkTimOEkEi2pmFBzk5Ul1nZsrNMltAV8uVpoM0Ltek_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="44079e5f0806161912x2e1487b3m8a2983065b7181a0_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Roadrunner blasts past the petaflop mark with Open MPI<br>
<strong>From:</strong> Durga Choudhury (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-23 10:20:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13404.php">Randolph Pullen: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<li><strong>Previous message:</strong> <a href="13402.php">Ralph Castain: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/06/5894.php">Brad Benton: "[OMPI users] Roadrunner blasts past the petaflop mark with Open MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brad/others
<br>
<p>Sorry for waking this very stale thread, but I am researching the
<br>
prospects of CellBE based supercomputing and I found this old email a
<br>
promising lead.
<br>
<p>My question is: what was the reason for choosing to mix an x86 based
<br>
AMD cores and PPC 970 based Cell? Was the Cell based computer custom
<br>
made or off-the-shelf? If the later, what was the brand? Is there any
<br>
more details on the design that Brad or someone else can provide? Was
<br>
the AMD CPU 32 bit or 64 bit (and was the OS 32 bit or 64 bit)? What
<br>
(distro) was the OS? (I assume it was Linux). What tool chain was used
<br>
for code development?
<br>
<p>I have Jack's excellent tutorial from netlib, but as always, more info
<br>
is always better.
<br>
<p>Best regards
<br>
Durga
<br>
<p><p>On Mon, Jun 16, 2008 at 10:12 PM, Brad Benton &lt;bradford.benton_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Greetings Open MPI users; we thought you'd be interested in the
</span><br>
<span class="quotelev1">&gt; following announcement...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A new supercomputer, powered by Open MPI, has broken the petaflop
</span><br>
<span class="quotelev1">&gt; barrier to become the world's fastest supercomputer.&#160; The
</span><br>
<span class="quotelev1">&gt; &quot;Roadrunner&quot; system was jointly developed by Los Alamos National
</span><br>
<span class="quotelev1">&gt; Laboratories and IBM.&#160; Roadrunner's design uses a cluster of AMD
</span><br>
<span class="quotelev1">&gt; dual-core processors coupled with computational accelerators based
</span><br>
<span class="quotelev1">&gt; on the IBM Cell Broadband Engine.&#160; The cluster consists of 3,060
</span><br>
<span class="quotelev1">&gt; nodes, each of which has 2 dual-core AMD processors and associated
</span><br>
<span class="quotelev1">&gt; Cell accelerators.&#160; The AMD nodes are connected with 4x DDR
</span><br>
<span class="quotelev1">&gt; InfiniBand links.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI was used as the communications library for the 12,240
</span><br>
<span class="quotelev1">&gt; processes comprising the Linpack run which broke the Petaflop
</span><br>
<span class="quotelev1">&gt; barrier at 1.026 Petaflop/s.&#160; The version of Open MPI used in the
</span><br>
<span class="quotelev1">&gt; run-for-record was a pre-release version of the upcoming 1.3
</span><br>
<span class="quotelev1">&gt; release.&#160; Enhancements in this release include modifications for
</span><br>
<span class="quotelev1">&gt; efficient, scalable process launch.&#160; As such, Open MPI was run
</span><br>
<span class="quotelev1">&gt; unmodified from a snapshot of the pre-1.3 source base (meaning:
</span><br>
<span class="quotelev1">&gt; there are no Roadrunner-specific enhancements that are unportable to
</span><br>
<span class="quotelev1">&gt; other environments -- all Open MPI users benefit from the
</span><br>
<span class="quotelev1">&gt; scalability and performance improvements contributed by the
</span><br>
<span class="quotelev1">&gt; Roadrunner project).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --Brad Benton
</span><br>
<span class="quotelev1">&gt; Open MPI/Roadrunner Team
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
Its a battle between humans and communists;
Which side are you in?
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13404.php">Randolph Pullen: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<li><strong>Previous message:</strong> <a href="13402.php">Ralph Castain: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/06/5894.php">Brad Benton: "[OMPI users] Roadrunner blasts past the petaflop mark with Open MPI"</a>
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
