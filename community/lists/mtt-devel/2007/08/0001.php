<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 23 16:06:49 2007" -->
<!-- isoreceived="20070823200649" -->
<!-- sent="Thu, 23 Aug 2007 16:06:39 -0400" -->
<!-- isosent="20070823200639" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Cisco submits to Josh DB" -->
<!-- id="E1062AE6-796F-4F8F-945C-971649B07528_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0C16DA2E-44FF-460B-B06B-1EA815FC1C68_at_cisco.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-23 16:06:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0002.php">Ethan Mallove: "Re: [MTT devel] Cisco submits to Josh DB"</a>
<li><strong>Previous message:</strong> <a href="0000.php">Jeff Squyres: "[MTT devel] Cisco submits to Josh DB"</a>
<li><strong>In reply to:</strong> <a href="0000.php">Jeff Squyres: "[MTT devel] Cisco submits to Josh DB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0002.php">Ethan Mallove: "Re: [MTT devel] Cisco submits to Josh DB"</a>
<li><strong>Reply:</strong> <a href="0002.php">Ethan Mallove: "Re: [MTT devel] Cisco submits to Josh DB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah I just ran IU's nightly set against my DB and it went fine  
<br>
submitting 6024 test_run results.
<br>
I say we are good to go forward.
<br>
<p>Here are some performance numbers:
<br>
Summary Report (24 hours all orgs)
<br>
[ 107,070 test_runs]
<br>
v2 -  87 sec
<br>
v3 -   6 sec
<br>
Summary Report (24 hours Only 'iu')
<br>
[ 29,625 test_runs]
<br>
v2 -  37 sec
<br>
v3 -   4 sec
<br>
<p>Summary Report (Past 3 days all orgs)
<br>
[ 294,395 test_runs]
<br>
v2 - 138 sec
<br>
v3 -   9 sec
<br>
<p>Summary Report (Past 3 days Only 'iu')
<br>
[ 86,026 test_runs]
<br>
v2 -  49 sec
<br>
v3 -  11 sec
<br>
<p>Summary Report (Past 2 weeks all orgs)
<br>
[ 1,460,824 test_runs]
<br>
v2 - 863 sec
<br>
v3 -  34 sec
<br>
Summary Report (Past 2 weeks Only 'iu')
<br>
[ 346,804 test_runs]
<br>
v2 - 878 sec (not seeded)
<br>
v2 -   2 sec (pre-seeded)
<br>
v3 -  12 sec
<br>
<p><p>Summary Report (Past 1 month all orgs)
<br>
[2,981,678 test_runs]
<br>
v2 - 1395 sec
<br>
v3 -  158 sec
<br>
Summary Report (Past 1 month Only 'iu')
<br>
[ test_runs]
<br>
v2 - 1069 sec (not seeded)
<br>
v2 -    2 sec (pre-seeded)
<br>
v3 -   39 sec
<br>
<p>Summary Report (2007-06-18 - 2007-06-19 all orgs)
<br>
[ 43,816 test_runs]
<br>
v2 - 484 sec
<br>
v3 -   5 sec
<br>
Summary Report (2007-06-18 - 2007-06-19 only 'iu')
<br>
[ 30,059 test_runs]
<br>
v2 - 479 sec (not seeded)
<br>
v2 -   2 sec (pre-seeded)
<br>
v3 -   2 sec
<br>
<p><p>Some stats I collected that we need not distribute, but thought were  
<br>
interesting:
<br>
Some intersting stats to date (2007-08-20)
<br>
# test_run results       : 17,522,720
<br>
# test_build results     :     42,655
<br>
# mpi_install results    :     45,096
<br>
# of performance results :     58,365
<br>
<p>Most popular test suites:
<br>
&nbsp;&nbsp;&nbsp;intel    : 65.5 %
<br>
&nbsp;&nbsp;&nbsp;ibm      : 28.0 %
<br>
&nbsp;&nbsp;&nbsp;onesided :  4.3 %
<br>
&nbsp;&nbsp;&nbsp;trivial  :  1.5 %
<br>
&nbsp;&nbsp;&nbsp;imb      :  0.4 %
<br>
<p>Most popular compilers:
<br>
&nbsp;&nbsp;&nbsp;gnu       : 49.8 %
<br>
&nbsp;&nbsp;&nbsp;intel     : 30.8 %
<br>
&nbsp;&nbsp;&nbsp;sun       :  6.9 %
<br>
&nbsp;&nbsp;&nbsp;pathscale :  6.8 %
<br>
&nbsp;&nbsp;&nbsp;pgi       :  5.7 %
<br>
<p>OS testing percentages:
<br>
&nbsp;&nbsp;&nbsp;Linux: 93.2 %
<br>
&nbsp;&nbsp;&nbsp;SunoS:  6.8 %
<br>
<p>Org. Contribution percentages:
<br>
&nbsp;&nbsp;&nbsp;Cisco    : 66.4 %
<br>
&nbsp;&nbsp;&nbsp;IU       : 23.2 %
<br>
&nbsp;&nbsp;&nbsp;Sun      :  6.8 %
<br>
&nbsp;&nbsp;&nbsp;IBM      :  2.3 %
<br>
&nbsp;&nbsp;&nbsp;HLRS     :  1.3 %
<br>
&nbsp;&nbsp;&nbsp;Voltaire :  0.0 %
<br>
&nbsp;&nbsp;&nbsp;UTK      :  0.0 %
<br>
<p><p>On Aug 23, 2007, at 12:35 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I think we got good submits to the josh db last night -- I think my
</span><br>
<span class="quotelev1">&gt; prior problems were pilot error (accidentally sharing scratch
</span><br>
<span class="quotelev1">&gt; directories between my josh-db testing MTT runs and my production MTT
</span><br>
<span class="quotelev1">&gt; runs).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://osl.iu.edu/~jjhursey/research/mtt/server/php/reporter.php">http://osl.iu.edu/~jjhursey/research/mtt/server/php/reporter.php</a>?
</span><br>
<span class="quotelev1">&gt; do_redir=6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I think Cisco is happy with the new DB and good for the Monday
</span><br>
<span class="quotelev1">&gt; rollout plan.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0002.php">Ethan Mallove: "Re: [MTT devel] Cisco submits to Josh DB"</a>
<li><strong>Previous message:</strong> <a href="0000.php">Jeff Squyres: "[MTT devel] Cisco submits to Josh DB"</a>
<li><strong>In reply to:</strong> <a href="0000.php">Jeff Squyres: "[MTT devel] Cisco submits to Josh DB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0002.php">Ethan Mallove: "Re: [MTT devel] Cisco submits to Josh DB"</a>
<li><strong>Reply:</strong> <a href="0002.php">Ethan Mallove: "Re: [MTT devel] Cisco submits to Josh DB"</a>
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
