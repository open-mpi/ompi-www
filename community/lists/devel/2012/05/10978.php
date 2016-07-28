<?
$subject_val = "Re: [OMPI devel] algorithm selection in open mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  7 20:55:49 2012" -->
<!-- isoreceived="20120508005549" -->
<!-- sent="Tue, 8 May 2012 00:55:44 +0000" -->
<!-- isosent="20120508005544" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] algorithm selection in open mpi" -->
<!-- id="DAA8342D-D4E7-4E7D-B299-52E68740788A_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1336379041.99271.YahooMailNeo_at_web34501.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-07 20:55:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10979.php">Eugene Loh: "[OMPI devel] trunk hang (when remote orted has to spawn another orted?)"</a>
<li><strong>Previous message:</strong> <a href="10977.php">Nathan Hjelm: "Re: [OMPI devel] Potential ob1 bug"</a>
<li><strong>In reply to:</strong> <a href="10976.php">roswan ismail: "Re: [OMPI devel] algorithm selection in open mpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George will have to answer that in detail, but note that if you modify the tuned coll module source code, you can simply &quot;make install&quot; in ompi/mca/coll/tuned.  That will re-build the coll tuned module and install it in the plugin directory.  You don't even need to recompile your MPI app, since all of the coll tuned module is dynamically opened at run-time.
<br>
<p>That's *much* faster than re-compiling/re-installing the whole of Open MPI.  w00t. :-)
<br>
<p><p>On May 7, 2012, at 4:24 AM, roswan ismail wrote:
<br>
<p><span class="quotelev1">&gt; hi all..
</span><br>
<span class="quotelev1">&gt; i already got the results from all algorithm used in open mpi for bcast. If i want to modify binomial algorithm for example, there is a simpler way to do that? or i just need to modify &quot;ompi_coll_tuned_bcast_intra_binomial&quot; function, then recompile and force the system to broadcast the data using a modified binomial?? is it the right way?? thanks
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Roswan Ismail,
</span><br>
<span class="quotelev1">&gt; FSKIK,
</span><br>
<span class="quotelev1">&gt; Universiti Pendidikan Sultan Idris,
</span><br>
<span class="quotelev1">&gt; Tanjong Malim, Perak, Malaysia.
</span><br>
<span class="quotelev1">&gt; iewanis_at_[hidden]
</span><br>
<span class="quotelev1">&gt; roswan_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, April 3, 2012 9:06 PM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] algorithm selection in open mpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Of course !!! ;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First set   coll_tuned_use_dynamic_rules to 1, and then use coll_tuned_dynamic_rules_filename to specify a file containing the selection logic. This is kind of tricky to write, so we don't advertise it to widely. I added an example below, contact me privately if you need more info.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1 # num of collectives
</span><br>
<span class="quotelev1">&gt; 3 # ID = 3 Alltoall collective (ID in coll_tuned.h)
</span><br>
<span class="quotelev1">&gt; 1 # number of com sizes
</span><br>
<span class="quotelev1">&gt; 64 # comm size 8
</span><br>
<span class="quotelev1">&gt; 2 # number of msg sizes
</span><br>
<span class="quotelev1">&gt; 0 3 0 0 # for message size 0, bruck 1, topo 0, 0 segmentation
</span><br>
<span class="quotelev1">&gt; 8192 2 0 0 # 8k+, pairwise 2, no topo or segmentation
</span><br>
<span class="quotelev1">&gt; # end of first collective
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 3, 2012, at 09:01 , Pavel Mezentsev wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way to specify collective depending on the size of the message and number of processes?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Pavel Mezentsev
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2012/4/3 George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Roswan,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There a re simpler solutions to achieve this. We have a built-in mechanism to select a specific collective implementation. Here is what you have to add in your .openmpi/mca-params.conf (or as MCA argument on the command line):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; coll_tuned_use_dynamic_rules = 1 
</span><br>
<span class="quotelev2">&gt;&gt; coll_tuned_bcast_algorithm = 6
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The first one activate the dynamic selection of collective algorithms, while the second one force all broadcast to be of the type 6 (binomial tree). Btw, once you set the first one, do a quick &quot;ompi_info --param coll tuned&quot; to see the list of all possible options for the collective algorithm selection.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 2, 2012, at 23:10 , roswan ismail wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all..
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am Roswan Ismail from Malaysia. I am focusing on MPI communication performance on quad-core cluster at my university. I used Open MPI-1.4.3 and measurements were done using scampi benchmark.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As I know, open MPI used multiple algorithms to broadcast data (MPI_BCAST) such as binomial, pipeline, binary tree, basic linear and split binary tree. All these algorithms will be used based on message size and communicator size. For example, binomial is used when message size to be broadcasted is small while pipeline used for broadcasting a large message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What I want to do now is, to use fixed algorithm i.e binomial for all message size. I want to see and compare the results with the default results. So, I was modified coll_tuned_decision_fixed.c which is located in open mpi-1.4.3/ompi/mca/coll/tuned by returning binomial algorithm for all condition. Then I recompile the files but the problem is, the results obtained is same as default. It seems I do not do any changes to the codes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So could you guys tell me the right way to do that.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Many thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Roswan Binti Ismail,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FTMK,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Univ. Pend. Sultan Idris,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tg Malim, Perak.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pej: 05-4505173
</span><br>
<span class="quotelev3">&gt;&gt;&gt; H/P: 0123588047
</span><br>
<span class="quotelev3">&gt;&gt;&gt; iewanis_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; roswan_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10979.php">Eugene Loh: "[OMPI devel] trunk hang (when remote orted has to spawn another orted?)"</a>
<li><strong>Previous message:</strong> <a href="10977.php">Nathan Hjelm: "Re: [OMPI devel] Potential ob1 bug"</a>
<li><strong>In reply to:</strong> <a href="10976.php">roswan ismail: "Re: [OMPI devel] algorithm selection in open mpi"</a>
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
