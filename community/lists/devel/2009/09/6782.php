<?
$subject_val = "Re: [OMPI devel] Can I have the same node specified multiple times in a host file?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 16:38:04 2009" -->
<!-- isoreceived="20090904203804" -->
<!-- sent="Fri, 4 Sep 2009 14:37:48 -0600" -->
<!-- isosent="20090904203748" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Can I have the same node specified multiple times in a host file?" -->
<!-- id="0A5DFD57-E1D2-4694-BD29-E5080CF904E5_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E040E4D9A4ACC2459C313FD46D5A4A5405A27DDF_at_ANPMB5.arinc.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Can I have the same node specified multiple times in a host file?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-04 16:37:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6783.php">Jeff Squyres: "Re: [OMPI devel] Failed datatype test"</a>
<li><strong>Previous message:</strong> <a href="6781.php">Paul H. Hargrove: "Re: [OMPI devel] suffix flag problems"</a>
<li><strong>In reply to:</strong> <a href="6780.php">Karl, Robert (RKARL): "[OMPI devel] Can I have the same node specified multiple times in a host file?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You need to use the sequential mapper instead of the default round- 
<br>
robin one. Set -mca rmaps seq on your cmd line. We will then assign  
<br>
ranks to nodes in sequential order based on the hostfile entries.
<br>
<p><p>On Sep 4, 2009, at 11:25 AM, Karl, Robert (RKARL) wrote:
<br>
<p><span class="quotelev1">&gt; I am attempting force certain processes to run on specific nodes due  
</span><br>
<span class="quotelev1">&gt; to the
</span><br>
<span class="quotelev1">&gt; I/O cards that are attached to the specific CPU motherboards (not  
</span><br>
<span class="quotelev1">&gt; all boards
</span><br>
<span class="quotelev1">&gt; have the same I/O cards).  I am using the -bynode and --hostname  
</span><br>
<span class="quotelev1">&gt; options to
</span><br>
<span class="quotelev1">&gt; specify the nodes that I want the processes to run on.  There are 4
</span><br>
<span class="quotelev1">&gt; processors (nodes) per motherboard.  I would like to be able to  
</span><br>
<span class="quotelev1">&gt; change the
</span><br>
<span class="quotelev1">&gt; motherboard each processor executes on simply by editing the host  
</span><br>
<span class="quotelev1">&gt; file to
</span><br>
<span class="quotelev1">&gt; change the ordering of the nodes in the host file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example:
</span><br>
<span class="quotelev1">&gt; I want process 0, 1 and 4 to run on node0 and process 2 and 3 to run  
</span><br>
<span class="quotelev1">&gt; on
</span><br>
<span class="quotelev1">&gt; node1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; shell$ cat my-hosts
</span><br>
<span class="quotelev1">&gt; node0 slots=4
</span><br>
<span class="quotelev1">&gt; node0 slots=4
</span><br>
<span class="quotelev1">&gt; node1 slots=4
</span><br>
<span class="quotelev1">&gt; node1 slots=4
</span><br>
<span class="quotelev1">&gt; node0 slots=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; shell$ mpirun --hostfile my-hosts -np 5 --bynode
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I end up with is process 1&amp; 3 running on node0 and process  
</span><br>
<span class="quotelev1">&gt; 0,2,4 running
</span><br>
<span class="quotelev1">&gt; on
</span><br>
<span class="quotelev1">&gt; node1.  I suspect that MPI does not like having the same node  
</span><br>
<span class="quotelev1">&gt; multiple times
</span><br>
<span class="quotelev1">&gt; in the host file.  It appears that only the last 2 entries of the  
</span><br>
<span class="quotelev1">&gt; host file
</span><br>
<span class="quotelev1">&gt; are being used and then the processes are being assigned in a round  
</span><br>
<span class="quotelev1">&gt; robin
</span><br>
<span class="quotelev1">&gt; fashion by node.  Is what I'm doing legal?  Any suggestions to  
</span><br>
<span class="quotelev1">&gt; achieve the
</span><br>
<span class="quotelev1">&gt; intended results (which is to be able to force an arbitary process  
</span><br>
<span class="quotelev1">&gt; to run on
</span><br>
<span class="quotelev1">&gt; an arbitary node)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bob
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6783.php">Jeff Squyres: "Re: [OMPI devel] Failed datatype test"</a>
<li><strong>Previous message:</strong> <a href="6781.php">Paul H. Hargrove: "Re: [OMPI devel] suffix flag problems"</a>
<li><strong>In reply to:</strong> <a href="6780.php">Karl, Robert (RKARL): "[OMPI devel] Can I have the same node specified multiple times in a host file?"</a>
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
