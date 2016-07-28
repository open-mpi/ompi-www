<?
$subject_val = "Re: [OMPI devel] default mapping on master vs v2.x";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 18 07:47:42 2016" -->
<!-- isoreceived="20160518114742" -->
<!-- sent="Wed, 18 May 2016 04:47:38 -0700" -->
<!-- isosent="20160518114738" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] default mapping on master vs v2.x" -->
<!-- id="696E0D25-91A4-40CD-88BC-FC77A7D6C027_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="df97bc87-7859-17e7-ab3b-f3c7ac3b9caf_at_rist.or.jp" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-18 07:47:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18997.php">Josh Hursey: "[OMPI devel] RFC: Public Test Repo"</a>
<li><strong>Previous message:</strong> <a href="18995.php">Jeff Squyres (jsquyres): "[OMPI devel] MTT ompi-tests password"</a>
<li><strong>In reply to:</strong> <a href="18994.php">Gilles Gouaillardet: "Re: [OMPI devel] default mapping on master vs v2.x"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don&#226;&#128;&#153;t think your stated analysis is quite correct. First, the topology is -always- retrieved. The only question is whether or not we set the #slots equal to the number of detected cpus.
<br>
<p>If the user specifies the #slots, then we respect that designation. If the user does not specify #slots, then we default to the number of detected cores (or HTs, if &#226;&#128;&#148;use-hwthread-cpus was given)
<br>
<p>map-by socket means we will fill the first node, going round-robin across the sockets on that node. Once the first node is full, we will then move to the next node.
<br>
<p>If you want to map across -all- sockets in the round-robin, then you have to specify &#226;&#128;&#156;-map-by socket:span&#226;&#128;&#157;. This tells us to treat all the sockets across all nodes as a single collection for mapping purposes.
<br>
<p>So it looks to me like things are working as designed on master - we can debate if the legacy behavior on 2.x is what we want or not.
<br>
<p>I honestly forget what we decided to do about assigning #slots when given a simple &#226;&#128;&#156;-host foo&#226;&#128;&#157; and no hostfile behind it, but Jeff created a Google-docs spreadsheet and posted it for comment that described all the use-cases. We verified that we do indeed conform to that specification, so you might want to go back and check it. I forget where it is located - I don&#226;&#128;&#153;t see it on the wiki page, so perhaps Jeff or someone can put it there?
<br>
<p>Ralph
<br>
<p><span class="quotelev1">&gt; On May 17, 2016, at 10:28 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i ran some more test and found this
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; with both master and v2.x  :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --host n0:16,n1:16 -np 4 --tag-output hostname | sort
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
<span class="quotelev1">&gt; and same output with the --map-by socket option.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; now, without specifying the number of slots per hosts, and the --oversubscribe option (mandatory for v2.x)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; v2.x :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --host n0,n1 -np 4 --tag-output --oversubscribe hostname | sort
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; master :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --host n0,n1 -np 4 --tag-output --oversubscribe hostname | sort
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; no change is the --map-by socket is used
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my observation is hardware topology is not retrieved when the number of slots is specified (both v2.x and master). the default policy is --map-by slot, *and* the --map-by socket option seems ignored, should we instead abort instead of ignoring this option ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when the number of slots is not specified (and --oversubscribe is used), it seems the hardware topology is retrieved on v2.x, but not on master. instead, master only retrieves the number of slots and use them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; from an end user point of view, the default mapping policy is --map-by socket on v2.x, and --map-by slot on master. --map-by socket seems ignored on master.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i re-read previous discussions, and i do not think this level of detail was ever discussed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; fwiw, --map-by node option is correctly interpreted on both master and v2.x
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --host n0,n1 -np 4 --tag-output --oversubscribe --map-by node hostname | sort
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
<span class="quotelev1">&gt; also, i can get the mapping i wished/expected with --map-by ppr:2:node
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bottom line :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) should we abort if the number of slots is explicitly specified and --map-by socket and the like option is requested ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) in master only, when the number of slots per host is not specified, should we retrieve the hardware topology instead of the number of slots ? if not, should we abort if --map-by socket is specified
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if there is a consensus and changes are desired, i am fine trying to implement them
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 5/17/2016 11:01 AM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Folks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; currently, default mapping policy on master is different than v2.x.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; my preliminary question is : when will the master mapping policy land into the release branch ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; v2.0.0 ? v2.x ? v3.0.0 ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; here are some commands and their output (both n0 and n1 have 16 cores each, mpirun runs on n0)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; first, let's force 2 slots per node via the --host parameter, and play with mapping
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [gilles_at_n0 ~]$ mpirun --tag-output --host n0:2,n1:2 -np 4 hostname  | sort
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stdout&gt;:n0
</span><br>
<span class="quotelev2">&gt;&gt; [1,1]&lt;stdout&gt;:n0
</span><br>
<span class="quotelev2">&gt;&gt; [1,2]&lt;stdout&gt;:n1
</span><br>
<span class="quotelev2">&gt;&gt; [1,3]&lt;stdout&gt;:n1
</span><br>
<span class="quotelev2">&gt;&gt; [gilles_at_n0 ~]$ mpirun --tag-output --host n0:2,n1:2 -np 4 --map-by socket hostname  | sort
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stdout&gt;:n0
</span><br>
<span class="quotelev2">&gt;&gt; [1,1]&lt;stdout&gt;:n0
</span><br>
<span class="quotelev2">&gt;&gt; [1,2]&lt;stdout&gt;:n1
</span><br>
<span class="quotelev2">&gt;&gt; [1,3]&lt;stdout&gt;:n1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /* so far so good, default mapping is --map-by socket, and mapping looks correct to me */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [gilles_at_n0 ~]$ mpirun --tag-output --host n0:2,n1:2 -np 4 --map-by node hostname  | sort
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stdout&gt;:n0
</span><br>
<span class="quotelev2">&gt;&gt; [1,1]&lt;stdout&gt;:n1
</span><br>
<span class="quotelev2">&gt;&gt; [1,2]&lt;stdout&gt;:n0
</span><br>
<span class="quotelev2">&gt;&gt; [1,3]&lt;stdout&gt;:n1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /* mapping looks correct to me too */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; now let's force 4 slots per node
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [gilles_at_n0 ~]$ mpirun --tag-output --host n0:4,n1:4 -np 4 --map-by node hostname  | sort
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stdout&gt;:n0
</span><br>
<span class="quotelev2">&gt;&gt; [1,1]&lt;stdout&gt;:n1
</span><br>
<span class="quotelev2">&gt;&gt; [1,2]&lt;stdout&gt;:n0
</span><br>
<span class="quotelev2">&gt;&gt; [1,3]&lt;stdout&gt;:n1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /* same output than previously, looks correct to me */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [gilles_at_n0 ~]$ mpirun --tag-output --host n0:4,n1:4 -np 4 --map-by socket hostname  | sort
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stdout&gt;:n0
</span><br>
<span class="quotelev2">&gt;&gt; [1,1]&lt;stdout&gt;:n0
</span><br>
<span class="quotelev2">&gt;&gt; [1,2]&lt;stdout&gt;:n0
</span><br>
<span class="quotelev2">&gt;&gt; [1,3]&lt;stdout&gt;:n0
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /* all tasks run on n0, even if i explicitly requested --map-by socket, that looks wrong to me */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [gilles_at_n0 ~]$ mpirun --tag-output --host n0:4,n1:4 -np 4 hostname  | sort
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stdout&gt;:n0
</span><br>
<span class="quotelev2">&gt;&gt; [1,1]&lt;stdout&gt;:n0
</span><br>
<span class="quotelev2">&gt;&gt; [1,2]&lt;stdout&gt;:n0
</span><br>
<span class="quotelev2">&gt;&gt; [1,3]&lt;stdout&gt;:n0
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /* same output than previously, which makes sense to me since the default mapping policy is --map-by socket,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; but all tasks run on n0, which still looks wrong to me */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; if i do not force the number of slots, i get the same output (16 cores are detected on each node) regardless the --map-by socket option.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; it seems --map-by core is used, regardless what we pass on the command line.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; in the last cases, is running all tasks on one node the intended behavior ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; if yes, which mapping option can be used to run the first 2 tasks on the first node, and the last 2 tasks on the second nodes ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18990.php">http://www.open-mpi.org/community/lists/devel/2016/05/18990.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18994.php">http://www.open-mpi.org/community/lists/devel/2016/05/18994.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18997.php">Josh Hursey: "[OMPI devel] RFC: Public Test Repo"</a>
<li><strong>Previous message:</strong> <a href="18995.php">Jeff Squyres (jsquyres): "[OMPI devel] MTT ompi-tests password"</a>
<li><strong>In reply to:</strong> <a href="18994.php">Gilles Gouaillardet: "Re: [OMPI devel] default mapping on master vs v2.x"</a>
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
