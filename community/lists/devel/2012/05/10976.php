<?
$subject_val = "Re: [OMPI devel] algorithm selection in open mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  7 04:24:07 2012" -->
<!-- isoreceived="20120507082407" -->
<!-- sent="Mon, 7 May 2012 01:24:01 -0700 (PDT)" -->
<!-- isosent="20120507082401" -->
<!-- name="roswan ismail" -->
<!-- email="iewanis_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] algorithm selection in open mpi" -->
<!-- id="1336379041.99271.YahooMailNeo_at_web34501.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="0D36A5AF-FF72-4E96-A0C8-BF931238AF85_at_eecs.utk.edu" -->
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
<strong>From:</strong> roswan ismail (<em>iewanis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-07 04:24:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10977.php">Nathan Hjelm: "Re: [OMPI devel] Potential ob1 bug"</a>
<li><strong>Previous message:</strong> <a href="10975.php">Ralph Castain: "Re: [OMPI devel] RFC: Update libevent"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/04/10808.php">George Bosilca: "Re: [OMPI devel] algorithm selection in open mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10978.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] algorithm selection in open mpi"</a>
<li><strong>Reply:</strong> <a href="10978.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] algorithm selection in open mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi all..
i already got the results from all algorithm used in open mpi for bcast. If i want to modify binomial algorithm for example, there is a simpler way to do that? or i just need to modify &quot;ompi_coll_tuned_bcast_intra_binomial&quot; function, then recompile and force the system to broadcast the data using a modified binomial?? is it the right way?? thanks

&#160;

Roswan Ismail, 
FSKIK, 
Universiti Pendidikan Sultan Idris,
Tanjong Malim, Perak, Malaysia.

iewanis_at_[hidden]
roswan_at_[hidden]


________________________________
 From: George Bosilca &lt;bosilca_at_[hidden]&gt;
To: Open MPI Developers &lt;devel_at_[hidden]&gt; 
Sent: Tuesday, April 3, 2012 9:06 PM
Subject: Re: [OMPI devel] algorithm selection in open mpi
 

Of course !!! ;)

First set&#160;&#160; coll_tuned_use_dynamic_rules to 1, and then use&#160;coll_tuned_dynamic_rules_filename to specify a file containing the selection logic. This is kind of tricky to write, so we don't advertise it to widely. I added an example below, contact me privately if you need more info.

&#160; Thanks,
&#160; &#160; george.


1 # num of collectives
3 # ID = 3 Alltoall collective (ID in coll_tuned.h)
1 # number of com sizes
64 # comm size 8
2 # number of msg sizes
0 3 0 0 # for message size 0, bruck 1, topo 0, 0 segmentation
8192 2 0 0 # 8k+, pairwise 2, no topo or segmentation
# end of first collective


On Apr 3, 2012, at 09:01 , Pavel Mezentsev wrote:

Is there a way to specify collective depending on the size of the message and number of processes?
&gt;
&gt;
&gt;Regards,
&gt;Pavel Mezentsev
&gt;
&gt;
&gt;2012/4/3 George Bosilca &lt;bosilca_at_[hidden]&gt;
&gt;
&gt;Roswan,
&gt;&gt;
&gt;&gt;
&gt;&gt;There a re simpler solutions to achieve this. We have a built-in mechanism to select a specific collective implementation. Here is what you have to add in your .openmpi/mca-params.conf (or as MCA argument on the command line):
&gt;&gt;
&gt;&gt;
&gt;&gt;coll_tuned_use_dynamic_rules = 1&#160;
&gt;&gt;coll_tuned_bcast_algorithm = 6
&gt;&gt;
&gt;&gt;
&gt;&gt;The first one activate the dynamic selection of collective algorithms, while the second one force all broadcast to be of the type 6 (binomial tree). Btw, once you set the first one, do a quick &quot;ompi_info --param coll tuned&quot; to see the list of all possible options for the collective algorithm selection.
&gt;&gt;
&gt;&gt;&#160; george.
&gt;&gt;&#160;&#160;
&gt;&gt;On Apr 2, 2012, at 23:10 , roswan ismail wrote:
&gt;&gt;
&gt;&gt;Hi all..
&gt;&gt;&gt;&#160;
&gt;&gt;&gt;I am Roswan Ismail from Malaysia. I am focusing on MPI
communication performance on quad-core cluster at my university. I used Open
MPI-1.4.3 and measurements were done using scampi benchmark.
&gt;&gt;&gt;&#160;
&gt;&gt;&gt;As I know, open MPI used multiple algorithms to broadcast
data (MPI_BCAST) such as binomial, pipeline, binary tree, basic linear and
split binary tree. All these algorithms will be used based on message size and
communicator size. For example, binomial is used when message size to be
broadcasted is small while pipeline used for broadcasting a large message. 
&gt;&gt;&gt;&#160;
&gt;&gt;&gt;What I want to do now is, to use fixed algorithm i.e
binomial for all message size. I want to see and compare the results with the
default results. So, I was modified coll_tuned_decision_fixed.c which is
located in open mpi-1.4.3/ompi/mca/coll/tuned by returning binomial algorithm
for all condition. Then I recompile the files but the problem is, the results
obtained is same as default. It seems I do not do any changes to the codes.
&gt;&gt;&gt;&#160;
&gt;&gt;&gt;So could you guys tell me the right way to do that.
&gt;&gt;&gt;&#160;
&gt;&gt;&gt;Many thanks
&gt;&gt;&gt;&#160;
&gt;&gt;&gt;Roswan Binti Ismail, 
&gt;&gt;&gt;FTMK, 
&gt;&gt;&gt;Univ. Pend. Sultan Idris,
&gt;&gt;&gt;Tg Malim, Perak.
&gt;&gt;&gt;Pej: 05-4505173
&gt;&gt;&gt;H/P: 0123588047
&gt;&gt;&gt;iewanis_at_[hidden]
&gt;&gt;&gt;roswan_at_[hidden]
&gt;&gt;&gt;_______________________________________________
&gt;&gt;&gt;devel mailing list
&gt;&gt;&gt;devel_at_[hidden]
&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;
&gt;&gt;_______________________________________________
&gt;&gt;devel mailing list
&gt;&gt;devel_at_[hidden]
&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;
&gt;
_______________________________________________
&gt;devel mailing list
&gt;devel_at_[hidden]
&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>

_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10976/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10977.php">Nathan Hjelm: "Re: [OMPI devel] Potential ob1 bug"</a>
<li><strong>Previous message:</strong> <a href="10975.php">Ralph Castain: "Re: [OMPI devel] RFC: Update libevent"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/04/10808.php">George Bosilca: "Re: [OMPI devel] algorithm selection in open mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10978.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] algorithm selection in open mpi"</a>
<li><strong>Reply:</strong> <a href="10978.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] algorithm selection in open mpi"</a>
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
