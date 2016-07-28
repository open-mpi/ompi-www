<?
$subject_val = "Re: [OMPI devel] algorithm selection in open mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  3 09:06:39 2012" -->
<!-- isoreceived="20120403130639" -->
<!-- sent="Tue, 3 Apr 2012 09:06:33 -0400" -->
<!-- isosent="20120403130633" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] algorithm selection in open mpi" -->
<!-- id="0D36A5AF-FF72-4E96-A0C8-BF931238AF85_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAFamD4V7ucNNfkAKxg-cmWpv0Eo_kOQoi8a9h6rpmu0EA81VYw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] algorithm selection in open mpi<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-03 09:06:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10809.php">Barrett, Brian W: "[OMPI devel] MPI Conformance List"</a>
<li><strong>Previous message:</strong> <a href="10807.php">Pavel Mezentsev: "Re: [OMPI devel] algorithm selection in open mpi"</a>
<li><strong>In reply to:</strong> <a href="10807.php">Pavel Mezentsev: "Re: [OMPI devel] algorithm selection in open mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/05/10976.php">roswan ismail: "Re: [OMPI devel] algorithm selection in open mpi"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/05/10976.php">roswan ismail: "Re: [OMPI devel] algorithm selection in open mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Of course !!! ;)
<br>
<p>First set   coll_tuned_use_dynamic_rules to 1, and then use coll_tuned_dynamic_rules_filename to specify a file containing the selection logic. This is kind of tricky to write, so we don't advertise it to widely. I added an example below, contact me privately if you need more info.
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>1 # num of collectives
<br>
3 # ID = 3 Alltoall collective (ID in coll_tuned.h)
<br>
1 # number of com sizes
<br>
64 # comm size 8
<br>
2 # number of msg sizes
<br>
0 3 0 0 # for message size 0, bruck 1, topo 0, 0 segmentation
<br>
8192 2 0 0 # 8k+, pairwise 2, no topo or segmentation
<br>
# end of first collective
<br>
<p><p>On Apr 3, 2012, at 09:01 , Pavel Mezentsev wrote:
<br>
<p><span class="quotelev1">&gt; Is there a way to specify collective depending on the size of the message and number of processes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Pavel Mezentsev
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2012/4/3 George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Roswan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There a re simpler solutions to achieve this. We have a built-in mechanism to select a specific collective implementation. Here is what you have to add in your .openmpi/mca-params.conf (or as MCA argument on the command line):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; coll_tuned_use_dynamic_rules = 1 
</span><br>
<span class="quotelev1">&gt; coll_tuned_bcast_algorithm = 6
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The first one activate the dynamic selection of collective algorithms, while the second one force all broadcast to be of the type 6 (binomial tree). Btw, once you set the first one, do a quick &quot;ompi_info --param coll tuned&quot; to see the list of all possible options for the collective algorithm selection.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; On Apr 2, 2012, at 23:10 , roswan ismail wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi all..
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; I am Roswan Ismail from Malaysia. I am focusing on MPI communication performance on quad-core cluster at my university. I used Open MPI-1.4.3 and measurements were done using scampi benchmark.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; As I know, open MPI used multiple algorithms to broadcast data (MPI_BCAST) such as binomial, pipeline, binary tree, basic linear and split binary tree. All these algorithms will be used based on message size and communicator size. For example, binomial is used when message size to be broadcasted is small while pipeline used for broadcasting a large message.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; What I want to do now is, to use fixed algorithm i.e binomial for all message size. I want to see and compare the results with the default results. So, I was modified coll_tuned_decision_fixed.c which is located in open mpi-1.4.3/ompi/mca/coll/tuned by returning binomial algorithm for all condition. Then I recompile the files but the problem is, the results obtained is same as default. It seems I do not do any changes to the codes.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; So could you guys tell me the right way to do that.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Many thanks
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Roswan Binti Ismail,
</span><br>
<span class="quotelev2">&gt;&gt; FTMK,
</span><br>
<span class="quotelev2">&gt;&gt; Univ. Pend. Sultan Idris,
</span><br>
<span class="quotelev2">&gt;&gt; Tg Malim, Perak.
</span><br>
<span class="quotelev2">&gt;&gt; Pej: 05-4505173
</span><br>
<span class="quotelev2">&gt;&gt; H/P: 0123588047
</span><br>
<span class="quotelev2">&gt;&gt; iewanis_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; roswan_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10808/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10809.php">Barrett, Brian W: "[OMPI devel] MPI Conformance List"</a>
<li><strong>Previous message:</strong> <a href="10807.php">Pavel Mezentsev: "Re: [OMPI devel] algorithm selection in open mpi"</a>
<li><strong>In reply to:</strong> <a href="10807.php">Pavel Mezentsev: "Re: [OMPI devel] algorithm selection in open mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/05/10976.php">roswan ismail: "Re: [OMPI devel] algorithm selection in open mpi"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/05/10976.php">roswan ismail: "Re: [OMPI devel] algorithm selection in open mpi"</a>
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
