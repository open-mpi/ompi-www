<?
$subject_val = "Re: [OMPI users] 2012/06/18 14:35:07 &#232;&#135;&#170;&#229;&#138;&#168;&#228;&#191;&#157;&#229;&#173;&#152;&#232;&#141;&#137;&#231;&#168;&#191;";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 19 13:23:54 2012" -->
<!-- isoreceived="20120619172354" -->
<!-- sent="Tue, 19 Jun 2012 11:23:46 -0600" -->
<!-- isosent="20120619172346" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 2012/06/18 14:35:07 &amp;#232;&amp;#135;&amp;#170;&amp;#229;&amp;#138;&amp;#168;&amp;#228;&amp;#191;&amp;#157;&amp;#229;&amp;#173;&amp;#152;&amp;#232;&amp;#141;&amp;#137;&amp;#231;&amp;#168;&amp;#191;" -->
<!-- id="2E9CF41F-FBF4-4C84-95C3-F303FD75F28B_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CB86DCB9-64BC-4BC1-8D4C-3F479F6DCD6B_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] 2012/06/18 14:35:07 &#232;&#135;&#170;&#229;&#138;&#168;&#228;&#191;&#157;&#229;&#173;&#152;&#232;&#141;&#137;&#231;&#168;&#191;<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-19 13:23:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19633.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Using OpenMPI on a network"</a>
<li><strong>Previous message:</strong> <a href="19631.php">Damien: "Re: [OMPI users] Using OpenMPI on a network"</a>
<li><strong>In reply to:</strong> <a href="19630.php">George Bosilca: "Re: [OMPI users] 2012/06/18 14:35:07 &#232;&#135;&#170;&#229;&#138;&#168;&#228;&#191;&#157;&#229;&#173;&#152;&#232;&#141;&#137;&#231;&#168;&#191;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19634.php">George Bosilca: "Re: [OMPI users] 2012/06/18 14:35:07 &#232;&#135;&#170;&#229;&#138;&#168;&#228;&#191;&#157;&#229;&#173;&#152;&#232;&#141;&#137;&#231;&#168;&#191;"</a>
<li><strong>Reply:</strong> <a href="19634.php">George Bosilca: "Re: [OMPI users] 2012/06/18 14:35:07 &#232;&#135;&#170;&#229;&#138;&#168;&#228;&#191;&#157;&#229;&#173;&#152;&#232;&#141;&#137;&#231;&#168;&#191;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's a little bit strong - OMPI still supports checkpoint/restart as a fault tolerance mechanism. There really isn't anything the sys admin has to do, though - what is required is that users periodically order their programs to checkpoint so they can be restarted after a failure.
<br>
<p>Checkpointing is typically done either by the app itself (say, when it reaches some point it feels is a good one to save), or using a script that just orders a checkpoint every so many seconds.
<br>
<p>What we have said is that we don't believe the FT &quot;run thru failure&quot; position pushed by UTK is particularly required at this time. Partly a question of impact vs benefit, mostly due to competing approaches offering equivalent fault recovery capability with less impact. But that's a separate discussion.
<br>
<p><p>On Jun 19, 2012, at 11:16 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; It has been clearly stated that the official position pushed forward by a majority of the Open MPI developer community is that fault tolerance is not needed so we (read this as the official version of Open MPI) do not support it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, a group of researchers have been working toward a version of Open MPI that supports the last fault tolerance proposal submitted for consideration to the MPI Forum. You can access it at <a href="https://bitbucket.org/jjhursey/ompi-ulfm-rts">https://bitbucket.org/jjhursey/ompi-ulfm-rts</a>.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   george. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 19, 2012, at 09:58 , &#233;&#153;&#136;&#230;&#157;&#190; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can anyone explain me the fault tolerant features in OpenMPI? I've read the FAQs and some papers about this topic listed in open-mpi.org, but still can't figure out when one node of my supercomputer system fails down during computing, what would happen with the fault tolerant mechanism in OpenMPI, and what should we system administrator do after the failure (or before). 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can anyone help me? My boss want me to deploy OpenMPI in our system cuz he want the fault tolerant feature.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks very much.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ---------------
</span><br>
<span class="quotelev2">&gt;&gt; CHEN Song
</span><br>
<span class="quotelev2">&gt;&gt; R&amp;D Department
</span><br>
<span class="quotelev2">&gt;&gt; National Supercomputer Center in Tianjin
</span><br>
<span class="quotelev2">&gt;&gt; Binhai New Area, Tianjin, China
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19632/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19633.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Using OpenMPI on a network"</a>
<li><strong>Previous message:</strong> <a href="19631.php">Damien: "Re: [OMPI users] Using OpenMPI on a network"</a>
<li><strong>In reply to:</strong> <a href="19630.php">George Bosilca: "Re: [OMPI users] 2012/06/18 14:35:07 &#232;&#135;&#170;&#229;&#138;&#168;&#228;&#191;&#157;&#229;&#173;&#152;&#232;&#141;&#137;&#231;&#168;&#191;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19634.php">George Bosilca: "Re: [OMPI users] 2012/06/18 14:35:07 &#232;&#135;&#170;&#229;&#138;&#168;&#228;&#191;&#157;&#229;&#173;&#152;&#232;&#141;&#137;&#231;&#168;&#191;"</a>
<li><strong>Reply:</strong> <a href="19634.php">George Bosilca: "Re: [OMPI users] 2012/06/18 14:35:07 &#232;&#135;&#170;&#229;&#138;&#168;&#228;&#191;&#157;&#229;&#173;&#152;&#232;&#141;&#137;&#231;&#168;&#191;"</a>
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
