<?
$subject_val = "[OMPI users] &#187;&#216;&#184;&#180;: Re: [OMPI users]  2012/06/18 14:35:07 &#215;&#212;&#182;&#175;&#177;&#163;&#180;&#230;&#178;&#221;&#184;&#229;";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 20 02:59:57 2012" -->
<!-- isoreceived="20120620065957" -->
<!-- sent="Wed, 20 Jun 2012 14:59:56 +0800" -->
<!-- isosent="20120620065956" -->
<!-- name="&#179;&#194;&#203;&#201;" -->
<!-- email="chensong_at_[hidden]" -->
<!-- subject="[OMPI users] &amp;#187;&amp;#216;&amp;#184;&amp;#180;: Re: [OMPI users]  2012/06/18 14:35:07 &amp;#215;&amp;#212;&amp;#182;&amp;#175;&amp;#177;&amp;#163;&amp;#180;&amp;#230;&amp;#178;&amp;#221;&amp;#184;&amp;#229;" -->
<!-- id="849dbad93c54bad775ff5fcd3bc7e2f5_at_nscc-tj.gov.cn" -->
<!-- charset="gb2312" -->
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
<strong>Subject:</strong> [OMPI users] &#187;&#216;&#184;&#180;: Re: [OMPI users]  2012/06/18 14:35:07 &#215;&#212;&#182;&#175;&#177;&#163;&#180;&#230;&#178;&#221;&#184;&#229;<br>
<strong>From:</strong> &#179;&#194;&#203;&#201; (<em>chensong_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-20 02:59:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19636.php">Josh Hursey: "[OMPI users] Re: [OMPI users] &#187;&#216;&#184;&#180;: Re: [OMPI users] 2012/06/18 14:35:07 &#215;&#212;&#182;&#175;&#177;&#163;&#180;&#230;&#178;&#221;&#184;&#229;"</a>
<li><strong>Previous message:</strong> <a href="19634.php">George Bosilca: "Re: [OMPI users] 2012/06/18 14:35:07 &#232;&#135;&#170;&#229;&#138;&#168;&#228;&#191;&#157;&#229;&#173;&#152;&#232;&#141;&#137;&#231;&#168;&#191;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19636.php">Josh Hursey: "[OMPI users] Re: [OMPI users] &#187;&#216;&#184;&#180;: Re: [OMPI users] 2012/06/18 14:35:07 &#215;&#212;&#182;&#175;&#177;&#163;&#180;&#230;&#178;&#221;&#184;&#229;"</a>
<li><strong>Reply:</strong> <a href="19636.php">Josh Hursey: "[OMPI users] Re: [OMPI users] &#187;&#216;&#184;&#180;: Re: [OMPI users] 2012/06/18 14:35:07 &#215;&#212;&#182;&#175;&#177;&#163;&#180;&#230;&#178;&#221;&#184;&#229;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As far as I know, OMPI combines the fault tolerant features in FT-MPI, LA-MPI and LAM/MPI, is this statement still correct now? Or as you say, OMPI supports checkpoint/restart(like in LAM/MPI)&amp;nbsp;only? I don't know the details of FT-MPI or LA-MPI, aren't they useful or necesarry?In fact, what I really want to know is, suppose I run a job on N processors with OMPI, and one (or some) of these processors crashes, then what would be done by the fault-tolerant&amp;nbsp;mechanism of OMPI? Meanwhile what should the sys-admin do(like restart the crashed node) ?In my understanding, after the crash, the sys-admin should restart the crashed node(if it can be restarted), and then do the rollback by some sort of command, while the OMPI would help hang up all the computing process, waiting for rollback command, is this correct?thanks again.&amp;nbsp;--------- &#212;&#173;&#202;&#188;&#211;&#202;&#188;&#254;&#208;&#197;&#207;&#162; ---------&#183;&#162;&#188;&#254;&#200;&#203;: &quot;Open MPI Users&quot; &amp;lt;users_at_[hidden]&amp;gt;&#202;&#213;&#188;&#254;&#200;&#203;: &quot;Open MPI Users&quot; &amp;lt;users_at_[hidden]&amp;gt;&#214;&#247;&#204;&#226;: Re: [OMPI users]  2012/06/18 14:35:07 &#215;&#212;&#182;&#175;&#177;&#163;&#180;&#230;&#178;&#221;&#184;&#229;&#200;&#213;&#198;&#218;: 2012/06/20 01:26:08, WednesdayThat's a little bit strong - OMPI still supports checkpoint/restart as a fault tolerance mechanism. There really isn't anything the sys admin has to do, though - what is required is that users periodically order their programs to checkpoint so they can be restarted after a failure.Checkpointing is typically done either by the app itself (say, when it reaches some point it feels is a good one to save), or using a script that just orders a checkpoint every so many seconds.What we have said is that we don't believe the FT &quot;run thru failure&quot; position pushed by UTK is particularly required at this time. Partly a question of impact vs benefit, mostly due to competing approaches offering equivalent fault recovery capability with less impact. But that's a separate discussion.On Jun 19, 2012, at 11:16 AM, George Bosilca wrote:It has been clearly stated that the official position pushed forward by a majority of the Open MPI developer community is that fault tolerance is not needed so we (read this as the official version of Open MPI) do not support it.However, a group of researchers have been working toward a version of Open MPI that supports the last fault tolerance proposal submitted for consideration to the MPI Forum. You can access it at&amp;nbsp;<a href="https://bitbucket.org/jjhursey/ompi-ulfm-rts.&amp;nbsp">https://bitbucket.org/jjhursey/ompi-ulfm-rts.&amp;nbsp</a>; george.&amp;nbsp;On Jun 19, 2012, at 09:58 , &#179;&#194;&#203;&#201; wrote:Hi all,Can anyone explain me the fault tolerant features in OpenMPI? I've read the FAQs and some papers about this topic listed in open-mpi.org, but still can't figure out when one node of my supercomputer system fails down during computing, what would happen with the fault tolerant mechanism in OpenMPI, and what should we system administrator do after the failure (or before).&amp;nbsp;Can anyone help me? My boss want me to deploy OpenMPI in our system cuz he want the fault tolerant feature.Thanks very much.---------------CHEN SongR&amp;amp;D DepartmentNational Supercomputer Center in TianjinBinhai New Area, Tianjin, China_______________________________________________users mailing listusers_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users_______________________________________________users">http://www.open-mpi.org/mailman/listinfo.cgi/users_______________________________________________users</a> mailing listusers_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19635/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19636.php">Josh Hursey: "[OMPI users] Re: [OMPI users] &#187;&#216;&#184;&#180;: Re: [OMPI users] 2012/06/18 14:35:07 &#215;&#212;&#182;&#175;&#177;&#163;&#180;&#230;&#178;&#221;&#184;&#229;"</a>
<li><strong>Previous message:</strong> <a href="19634.php">George Bosilca: "Re: [OMPI users] 2012/06/18 14:35:07 &#232;&#135;&#170;&#229;&#138;&#168;&#228;&#191;&#157;&#229;&#173;&#152;&#232;&#141;&#137;&#231;&#168;&#191;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19636.php">Josh Hursey: "[OMPI users] Re: [OMPI users] &#187;&#216;&#184;&#180;: Re: [OMPI users] 2012/06/18 14:35:07 &#215;&#212;&#182;&#175;&#177;&#163;&#180;&#230;&#178;&#221;&#184;&#229;"</a>
<li><strong>Reply:</strong> <a href="19636.php">Josh Hursey: "[OMPI users] Re: [OMPI users] &#187;&#216;&#184;&#180;: Re: [OMPI users] 2012/06/18 14:35:07 &#215;&#212;&#182;&#175;&#177;&#163;&#180;&#230;&#178;&#221;&#184;&#229;"</a>
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
