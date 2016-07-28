<?
$subject_val = "Re: [OMPI devel] Question about RMAPS rank_file component patch and modifications";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 27 05:42:33 2011" -->
<!-- isoreceived="20110427094233" -->
<!-- sent="Wed, 27 Apr 2011 17:42:18 +0800 (CST)" -->
<!-- isosent="20110427094218" -->
<!-- name="&#214;&#220;&#186;&#186;&#199;&#229;" -->
<!-- email="qdzhouhanqing_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Question about RMAPS rank_file component patch and modifications" -->
<!-- id="22a51.613a.12f96567217.Coremail.qdzhouhanqing_at_126.com" -->
<!-- charset="GBK" -->
<!-- inreplyto="88e3ad.15712.12f90d491f9.Coremail.qdzhouhanqing_at_126.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Question about RMAPS rank_file component patch and modifications<br>
<strong>From:</strong> &#214;&#220;&#186;&#186;&#199;&#229; (<em>qdzhouhanqing_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-27 05:42:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9225.php">Jeff Squyres: "Re: [OMPI devel] Question about RMAPS rank_file component patch and modifications"</a>
<li><strong>Previous message:</strong> <a href="9223.php">&#214;&#220;&#186;&#186;&#199;&#229;: "[OMPI devel] Question about RMAPS rank_file component patch and modifications"</a>
<li><strong>In reply to:</strong> <a href="9223.php">&#214;&#220;&#186;&#186;&#199;&#229;: "[OMPI devel] Question about RMAPS rank_file component patch and modifications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9225.php">Jeff Squyres: "Re: [OMPI devel] Question about RMAPS rank_file component patch and modifications"</a>
<li><strong>Reply:</strong> <a href="9225.php">Jeff Squyres: "Re: [OMPI devel] Question about RMAPS rank_file component patch and modifications"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I solved it, just change rmaps_rank_file_lex.l  file, and then  generate the rmaps_rank_file_lex.c from rmaps_rank_file_lex.l by using flex.
<br>
<p><pre>
--
 
 
 
-------------------------------------------
                     
 &#177;&#177;&#190;&#169;&#186;&#189;&#191;&#213;&#186;&#189;&#204;&#236;&#180;&#243;&#209;&#167;&#199;&#182;&#200;&#235;&#202;&#189;&#207;&#181;&#205;&#179;&#202;&#181;&#209;&#233;&#202;&#210;
 &#214;&#220;&#186;&#186;&#199;&#229;&#163;&#168;Handy_Zhou&#163;&#169;
 MSN&#163;&#186;qdzhouhanqing_at_[hidden]
 
-------------------------------------------
At 2011-04-26 16:02:20&#163;&#172;&quot;&#214;&#220;&#186;&#186;&#199;&#229;&quot; &lt;qdzhouhanqing_at_[hidden]&gt; wrote:
Hi:
  To meet our special requirement, I want the rank_file syntax supports like that:
    schedule=Handy_at_192.168.1.13 slot=1:3
   What should I do if I want to finish the RMAPS rank_file component patch? I must generate the rmaps_rank_file_lex.c from rmaps_rank_file_lex.l ?
--
 
 
 
-------------------------------------------
                     
 &#177;&#177;&#190;&#169;&#186;&#189;&#191;&#213;&#186;&#189;&#204;&#236;&#180;&#243;&#209;&#167;&#199;&#182;&#200;&#235;&#202;&#189;&#207;&#181;&#205;&#179;&#202;&#181;&#209;&#233;&#202;&#210;
 &#214;&#220;&#186;&#186;&#199;&#229;&#163;&#168;Handy_Zhou&#163;&#169;
 MSN&#163;&#186;qdzhouhanqing_at_[hidden]
 
-------------------------------------------
&#204;&#229;&#209;&#233;&#205;&#248;&#210;&#215;&#211;&#202;&#207;&#228;2G&#179;&#172;&#180;&#243;&#184;&#189;&#188;&#254;&#163;&#172;&#199;&#225;&#203;&#201;&#183;&#162;&#211;&#197;&#214;&#202;&#180;&#243;&#181;&#231;&#211;&#176;&#161;&#162;&#180;&#243;&#213;&#213;&#198;&#172;&#163;&#172;&#204;&#225;&#203;&#217;3&#177;&#182;!</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9224/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9225.php">Jeff Squyres: "Re: [OMPI devel] Question about RMAPS rank_file component patch and modifications"</a>
<li><strong>Previous message:</strong> <a href="9223.php">&#214;&#220;&#186;&#186;&#199;&#229;: "[OMPI devel] Question about RMAPS rank_file component patch and modifications"</a>
<li><strong>In reply to:</strong> <a href="9223.php">&#214;&#220;&#186;&#186;&#199;&#229;: "[OMPI devel] Question about RMAPS rank_file component patch and modifications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9225.php">Jeff Squyres: "Re: [OMPI devel] Question about RMAPS rank_file component patch and modifications"</a>
<li><strong>Reply:</strong> <a href="9225.php">Jeff Squyres: "Re: [OMPI devel] Question about RMAPS rank_file component patch and modifications"</a>
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
