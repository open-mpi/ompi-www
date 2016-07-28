<?
$subject_val = "Re: [OMPI users] Guaranteed run rank 0 on a given machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 10 14:11:19 2010" -->
<!-- isoreceived="20101210191119" -->
<!-- sent="Fri, 10 Dec 2010 14:08:04 -0500" -->
<!-- isosent="20101210190804" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Guaranteed run rank 0 on a given machine?" -->
<!-- id="4D027A94.9010301_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E1PR7z7-0005Ae-FQ_at_mendel.bio.caltech.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Guaranteed run rank 0 on a given machine?<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-10 14:08:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15075.php">David Mathog: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?"</a>
<li><strong>Previous message:</strong> <a href="15073.php">David Mathog: "[OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<li><strong>In reply to:</strong> <a href="15073.php">David Mathog: "[OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15079.php">Ralph Castain: "Re: [OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<li><strong>Reply:</strong> <a href="15079.php">Ralph Castain: "Re: [OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/10/2010 01:46 PM, David Mathog wrote:
<br>
<span class="quotelev1">&gt; The master is commonly very different from the workers, so I expected
</span><br>
<span class="quotelev1">&gt; there would be something like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    --rank0-on&lt;hostname&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but there doesn't seem to be a single switch on mpirun to do that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If &quot;mastermachine&quot; is the first entry in the hostfile, or the first
</span><br>
<span class="quotelev1">&gt; machine in a -hosts list, will rank 0 always run there?  If so, will it
</span><br>
<span class="quotelev1">&gt; always run in the first slot on the first machine listed?  That seems to
</span><br>
<span class="quotelev1">&gt; be the case in practice, but is it guaranteed?  Even if -loadbalance is
</span><br>
<span class="quotelev1">&gt; used?
</span><br>
<span class="quotelev1">&gt;
</span><br>
For Open MPI the above is correct, I am hesitant to use guaranteed though.
<br>
<span class="quotelev1">&gt; Otherwise, there is the rankfile method.  In the situation where the
</span><br>
<span class="quotelev1">&gt; master must run on a specific node, but there is no preference for the
</span><br>
<span class="quotelev1">&gt; workers, would a rank file like this be sufficient?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rank 0=mastermachine slot=0
</span><br>
I thought you may have had to give all ranks but empirically it looks 
<br>
like you can.
<br>
<span class="quotelev1">&gt; The mpirun man page gives an example where all nodes/slots are
</span><br>
<span class="quotelev1">&gt; specified, but it doesn't say explicitly what happens if the
</span><br>
<span class="quotelev1">&gt; configuration is only partially specified, or how it interacts with the
</span><br>
<span class="quotelev1">&gt; -np parameter.  Modifying the man page example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cat myrankfile
</span><br>
<span class="quotelev1">&gt; rank 0=aa slot=1:0-2
</span><br>
<span class="quotelev1">&gt; rank 1=bb slot=0:0,1
</span><br>
<span class="quotelev1">&gt; rank 2=cc slot=1-2
</span><br>
<span class="quotelev1">&gt; mpirun -H aa,bb,cc,dd -np 4 -rf myrankfile ./a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rank 0 runs on node aa, bound to socket 1, cores 0-2.
</span><br>
<span class="quotelev1">&gt; Rank 1 runs on node bb, bound to socket 0, cores 0 and 1.
</span><br>
<span class="quotelev1">&gt; Rank 2 runs on node cc, bound to cores 1 and 2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rank 3 runs where?  not at all, or on dd, aa:slot=0, or ...?
</span><br>
&nbsp;From my empirical runs it looks to me like rank 3 would end up on aa 
<br>
possibly slot=0.
<br>
In other words once you run out of entries in the rankfile it looks like 
<br>
the processes then start from the beginning of the hostlist again.
<br>
<p>--td
<br>
<span class="quotelev1">&gt; Also, in my limited testing --host and -hostfile seem to be mutually
</span><br>
<span class="quotelev1">&gt; exclusive.  That is reasonable, but it isn't clear that it is intended.
</span><br>
<span class="quotelev1">&gt;   Example, with a hostfile containing one entry for &quot;monkey02.cluster
</span><br>
<span class="quotelev1">&gt; slots=1&quot;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun  --host monkey01   --mca plm_rsh_agent rsh  hostname
</span><br>
<span class="quotelev1">&gt; monkey01.cluster
</span><br>
<span class="quotelev1">&gt; mpirun  --host monkey02   --mca plm_rsh_agent rsh  hostname
</span><br>
<span class="quotelev1">&gt; monkey02.cluster
</span><br>
<span class="quotelev1">&gt; mpirun  -hostfile /usr/common/etc/openmpi.machines.test1 \
</span><br>
<span class="quotelev1">&gt;     --mca plm_rsh_agent rsh  hostname
</span><br>
<span class="quotelev1">&gt; monkey02.cluster
</span><br>
<span class="quotelev1">&gt; mpirun  --host monkey01  \
</span><br>
<span class="quotelev1">&gt;    -hostfile /usr/commom/etc/openmpi.machines.test1 \
</span><br>
<span class="quotelev1">&gt;    --mca plm_rsh_agent rsh  hostname
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; There are no allocated resources for the application
</span><br>
<span class="quotelev1">&gt;    hostname
</span><br>
<span class="quotelev1">&gt; that match the requested mapping:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Verify that you have mapped the allocated resources properly using the
</span><br>
<span class="quotelev1">&gt; --host or --hostfile specification.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; David Mathog
</span><br>
<span class="quotelev1">&gt; mathog_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Manager, Sequence Analysis Facility, Biology Division, Caltech
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15074/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-15074/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15075.php">David Mathog: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?"</a>
<li><strong>Previous message:</strong> <a href="15073.php">David Mathog: "[OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<li><strong>In reply to:</strong> <a href="15073.php">David Mathog: "[OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15079.php">Ralph Castain: "Re: [OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<li><strong>Reply:</strong> <a href="15079.php">Ralph Castain: "Re: [OMPI users] Guaranteed run rank 0 on a given machine?"</a>
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
