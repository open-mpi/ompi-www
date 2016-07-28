<?
$subject_val = "Re: [OMPI devel] default mapping on master vs v2.x";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 18 01:28:17 2016" -->
<!-- isoreceived="20160518052817" -->
<!-- sent="Wed, 18 May 2016 14:28:03 +0900" -->
<!-- isosent="20160518052803" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] default mapping on master vs v2.x" -->
<!-- id="df97bc87-7859-17e7-ab3b-f3c7ac3b9caf_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="56c9cca9-b2a8-af6c-53c2-039e06b16131_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] default mapping on master vs v2.x<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-18 01:28:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18995.php">Jeff Squyres (jsquyres): "[OMPI devel] MTT ompi-tests password"</a>
<li><strong>Previous message:</strong> <a href="18993.php">Christopher Samuel: "Re: [OMPI devel] Github pricing plan changes announced today"</a>
<li><strong>In reply to:</strong> <a href="18990.php">Gilles Gouaillardet: "[OMPI devel] default mapping on master vs v2.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18996.php">Ralph Castain: "Re: [OMPI devel] default mapping on master vs v2.x"</a>
<li><strong>Reply:</strong> <a href="18996.php">Ralph Castain: "Re: [OMPI devel] default mapping on master vs v2.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p><p>i ran some more test and found this
<br>
<p>with both master and v2.x  :
<br>
<p>mpirun --host n0:16,n1:16 -np 4 --tag-output hostname | sort
<br>
[1,0]&lt;stdout&gt;:n0
<br>
[1,1]&lt;stdout&gt;:n0
<br>
[1,2]&lt;stdout&gt;:n0
<br>
[1,3]&lt;stdout&gt;:n0
<br>
<p>and same output with the --map-by socket option.
<br>
<p><p>now, without specifying the number of slots per hosts, and the 
<br>
--oversubscribe option (mandatory for v2.x)
<br>
<p>v2.x :
<br>
<p>mpirun --host n0,n1 -np 4 --tag-output --oversubscribe hostname | sort
<br>
[1,0]&lt;stdout&gt;:n0
<br>
[1,1]&lt;stdout&gt;:n0
<br>
[1,2]&lt;stdout&gt;:n1
<br>
[1,3]&lt;stdout&gt;:n1
<br>
<p><p>master :
<br>
<p>mpirun --host n0,n1 -np 4 --tag-output --oversubscribe hostname | sort
<br>
[1,0]&lt;stdout&gt;:n0
<br>
[1,1]&lt;stdout&gt;:n0
<br>
[1,2]&lt;stdout&gt;:n0
<br>
[1,3]&lt;stdout&gt;:n0
<br>
<p><p>no change is the --map-by socket is used
<br>
<p><p>my observation is hardware topology is not retrieved when the number of 
<br>
slots is specified (both v2.x and master). the default policy is 
<br>
--map-by slot, *and* the --map-by socket option seems ignored, should we 
<br>
instead abort instead of ignoring this option ?
<br>
<p>when the number of slots is not specified (and --oversubscribe is used), 
<br>
it seems the hardware topology is retrieved on v2.x, but not on master. 
<br>
instead, master only retrieves the number of slots and use them.
<br>
<p>from an end user point of view, the default mapping policy is --map-by 
<br>
socket on v2.x, and --map-by slot on master. --map-by socket seems 
<br>
ignored on master.
<br>
<p><p>i re-read previous discussions, and i do not think this level of detail 
<br>
was ever discussed.
<br>
<p><p>fwiw, --map-by node option is correctly interpreted on both master and v2.x
<br>
<p>mpirun --host n0,n1 -np 4 --tag-output --oversubscribe --map-by node 
<br>
hostname | sort
<br>
[1,0]&lt;stdout&gt;:n0
<br>
[1,1]&lt;stdout&gt;:n1
<br>
[1,2]&lt;stdout&gt;:n0
<br>
[1,3]&lt;stdout&gt;:n1
<br>
<p>also, i can get the mapping i wished/expected with --map-by ppr:2:node
<br>
<p><p>bottom line :
<br>
<p>1) should we abort if the number of slots is explicitly specified and 
<br>
--map-by socket and the like option is requested ?
<br>
<p>2) in master only, when the number of slots per host is not specified, 
<br>
should we retrieve the hardware topology instead of the number of slots 
<br>
? if not, should we abort if --map-by socket is specified
<br>
<p><p>if there is a consensus and changes are desired, i am fine trying to 
<br>
implement them
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p>On 5/17/2016 11:01 AM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; currently, default mapping policy on master is different than v2.x.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; my preliminary question is : when will the master mapping policy land 
</span><br>
<span class="quotelev1">&gt; into the release branch ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; v2.0.0 ? v2.x ? v3.0.0 ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; here are some commands and their output (both n0 and n1 have 16 cores 
</span><br>
<span class="quotelev1">&gt; each, mpirun runs on n0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; first, let's force 2 slots per node via the --host parameter, and play 
</span><br>
<span class="quotelev1">&gt; with mapping
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [gilles_at_n0 ~]$ mpirun --tag-output --host n0:2,n1:2 -np 4 hostname  | 
</span><br>
<span class="quotelev1">&gt; sort
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:n0
</span><br>
<span class="quotelev1">&gt; [1,1]&lt;stdout&gt;:n0
</span><br>
<span class="quotelev1">&gt; [1,2]&lt;stdout&gt;:n1
</span><br>
<span class="quotelev1">&gt; [1,3]&lt;stdout&gt;:n1
</span><br>
<span class="quotelev1">&gt; [gilles_at_n0 ~]$ mpirun --tag-output --host n0:2,n1:2 -np 4 --map-by 
</span><br>
<span class="quotelev1">&gt; socket hostname  | sort
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:n0
</span><br>
<span class="quotelev1">&gt; [1,1]&lt;stdout&gt;:n0
</span><br>
<span class="quotelev1">&gt; [1,2]&lt;stdout&gt;:n1
</span><br>
<span class="quotelev1">&gt; [1,3]&lt;stdout&gt;:n1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* so far so good, default mapping is --map-by socket, and mapping 
</span><br>
<span class="quotelev1">&gt; looks correct to me */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [gilles_at_n0 ~]$ mpirun --tag-output --host n0:2,n1:2 -np 4 --map-by 
</span><br>
<span class="quotelev1">&gt; node hostname  | sort
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:n0
</span><br>
<span class="quotelev1">&gt; [1,1]&lt;stdout&gt;:n1
</span><br>
<span class="quotelev1">&gt; [1,2]&lt;stdout&gt;:n0
</span><br>
<span class="quotelev1">&gt; [1,3]&lt;stdout&gt;:n1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* mapping looks correct to me too */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; now let's force 4 slots per node
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [gilles_at_n0 ~]$ mpirun --tag-output --host n0:4,n1:4 -np 4 --map-by 
</span><br>
<span class="quotelev1">&gt; node hostname  | sort
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:n0
</span><br>
<span class="quotelev1">&gt; [1,1]&lt;stdout&gt;:n1
</span><br>
<span class="quotelev1">&gt; [1,2]&lt;stdout&gt;:n0
</span><br>
<span class="quotelev1">&gt; [1,3]&lt;stdout&gt;:n1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* same output than previously, looks correct to me */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [gilles_at_n0 ~]$ mpirun --tag-output --host n0:4,n1:4 -np 4 --map-by 
</span><br>
<span class="quotelev1">&gt; socket hostname  | sort
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:n0
</span><br>
<span class="quotelev1">&gt; [1,1]&lt;stdout&gt;:n0
</span><br>
<span class="quotelev1">&gt; [1,2]&lt;stdout&gt;:n0
</span><br>
<span class="quotelev1">&gt; [1,3]&lt;stdout&gt;:n0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* all tasks run on n0, even if i explicitly requested --map-by 
</span><br>
<span class="quotelev1">&gt; socket, that looks wrong to me */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [gilles_at_n0 ~]$ mpirun --tag-output --host n0:4,n1:4 -np 4 hostname  | 
</span><br>
<span class="quotelev1">&gt; sort
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:n0
</span><br>
<span class="quotelev1">&gt; [1,1]&lt;stdout&gt;:n0
</span><br>
<span class="quotelev1">&gt; [1,2]&lt;stdout&gt;:n0
</span><br>
<span class="quotelev1">&gt; [1,3]&lt;stdout&gt;:n0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* same output than previously, which makes sense to me since the 
</span><br>
<span class="quotelev1">&gt; default mapping policy is --map-by socket,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but all tasks run on n0, which still looks wrong to me */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if i do not force the number of slots, i get the same output (16 cores 
</span><br>
<span class="quotelev1">&gt; are detected on each node) regardless the --map-by socket option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it seems --map-by core is used, regardless what we pass on the command 
</span><br>
<span class="quotelev1">&gt; line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in the last cases, is running all tasks on one node the intended 
</span><br>
<span class="quotelev1">&gt; behavior ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if yes, which mapping option can be used to run the first 2 tasks on 
</span><br>
<span class="quotelev1">&gt; the first node, and the last 2 tasks on the second nodes ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18990.php">http://www.open-mpi.org/community/lists/devel/2016/05/18990.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18995.php">Jeff Squyres (jsquyres): "[OMPI devel] MTT ompi-tests password"</a>
<li><strong>Previous message:</strong> <a href="18993.php">Christopher Samuel: "Re: [OMPI devel] Github pricing plan changes announced today"</a>
<li><strong>In reply to:</strong> <a href="18990.php">Gilles Gouaillardet: "[OMPI devel] default mapping on master vs v2.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18996.php">Ralph Castain: "Re: [OMPI devel] default mapping on master vs v2.x"</a>
<li><strong>Reply:</strong> <a href="18996.php">Ralph Castain: "Re: [OMPI devel] default mapping on master vs v2.x"</a>
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
