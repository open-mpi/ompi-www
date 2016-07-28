<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 24 09:46:13 2007" -->
<!-- isoreceived="20070824134613" -->
<!-- sent="Fri, 24 Aug 2007 09:46:01 -0400" -->
<!-- isosent="20070824134601" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Cisco submits to Josh DB" -->
<!-- id="20070824134601.GX11675_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E1062AE6-796F-4F8F-945C-971649B07528_at_open-mpi.org" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-24 09:46:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0003.php">Jeff Squyres: "Re: [MTT devel] Cisco submits to Josh DB"</a>
<li><strong>Previous message:</strong> <a href="0001.php">Josh Hursey: "Re: [MTT devel] Cisco submits to Josh DB"</a>
<li><strong>In reply to:</strong> <a href="0001.php">Josh Hursey: "Re: [MTT devel] Cisco submits to Josh DB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0003.php">Jeff Squyres: "Re: [MTT devel] Cisco submits to Josh DB"</a>
<li><strong>Reply:</strong> <a href="0003.php">Jeff Squyres: "Re: [MTT devel] Cisco submits to Josh DB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
jms-new-parser is part of v3.0 too, right?
<br>
I ran into issues with it:
<br>
<p>It's doing some funky things w/ my command: 
<br>
<p>&nbsp;&nbsp;<a href="http://osl.iu.edu/~jjhursey/research/mtt/server/php/reporter.php?do_redir=7">http://osl.iu.edu/~jjhursey/research/mtt/server/php/reporter.php?do_redir=7</a>
<br>
<p>It repeats the command string 5 times in some spots.
<br>
And should &quot;network&quot; and &quot;runtime params&quot; be blank for:
<br>
<p>&nbsp;&nbsp;mpirun --mca btl self,tcp --host burl-ct-v440-4,burl-ct-v440-4,burl-ct-v440-4,burl-ct-v440-4,burl-ct-v440-5,burl-ct-v440-5,burl-ct-v440-5,burl-ct-v440-5 -np 2 --prefix /opt/SUNWhpc/HPC7.0/ ./c_hello 
<br>
<p>?
<br>
<p>-Ethan
<br>
<p><p>On Thu, Aug/23/2007 04:06:39PM, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; Yeah I just ran IU's nightly set against my DB and it went fine  
</span><br>
<span class="quotelev1">&gt; submitting 6024 test_run results.
</span><br>
<span class="quotelev1">&gt; I say we are good to go forward.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here are some performance numbers:
</span><br>
<span class="quotelev1">&gt; Summary Report (24 hours all orgs)
</span><br>
<span class="quotelev1">&gt; [ 107,070 test_runs]
</span><br>
<span class="quotelev1">&gt; v2 -  87 sec
</span><br>
<span class="quotelev1">&gt; v3 -   6 sec
</span><br>
<span class="quotelev1">&gt; Summary Report (24 hours Only 'iu')
</span><br>
<span class="quotelev1">&gt; [ 29,625 test_runs]
</span><br>
<span class="quotelev1">&gt; v2 -  37 sec
</span><br>
<span class="quotelev1">&gt; v3 -   4 sec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Summary Report (Past 3 days all orgs)
</span><br>
<span class="quotelev1">&gt; [ 294,395 test_runs]
</span><br>
<span class="quotelev1">&gt; v2 - 138 sec
</span><br>
<span class="quotelev1">&gt; v3 -   9 sec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Summary Report (Past 3 days Only 'iu')
</span><br>
<span class="quotelev1">&gt; [ 86,026 test_runs]
</span><br>
<span class="quotelev1">&gt; v2 -  49 sec
</span><br>
<span class="quotelev1">&gt; v3 -  11 sec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Summary Report (Past 2 weeks all orgs)
</span><br>
<span class="quotelev1">&gt; [ 1,460,824 test_runs]
</span><br>
<span class="quotelev1">&gt; v2 - 863 sec
</span><br>
<span class="quotelev1">&gt; v3 -  34 sec
</span><br>
<span class="quotelev1">&gt; Summary Report (Past 2 weeks Only 'iu')
</span><br>
<span class="quotelev1">&gt; [ 346,804 test_runs]
</span><br>
<span class="quotelev1">&gt; v2 - 878 sec (not seeded)
</span><br>
<span class="quotelev1">&gt; v2 -   2 sec (pre-seeded)
</span><br>
<span class="quotelev1">&gt; v3 -  12 sec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Summary Report (Past 1 month all orgs)
</span><br>
<span class="quotelev1">&gt; [2,981,678 test_runs]
</span><br>
<span class="quotelev1">&gt; v2 - 1395 sec
</span><br>
<span class="quotelev1">&gt; v3 -  158 sec
</span><br>
<span class="quotelev1">&gt; Summary Report (Past 1 month Only 'iu')
</span><br>
<span class="quotelev1">&gt; [ test_runs]
</span><br>
<span class="quotelev1">&gt; v2 - 1069 sec (not seeded)
</span><br>
<span class="quotelev1">&gt; v2 -    2 sec (pre-seeded)
</span><br>
<span class="quotelev1">&gt; v3 -   39 sec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Summary Report (2007-06-18 - 2007-06-19 all orgs)
</span><br>
<span class="quotelev1">&gt; [ 43,816 test_runs]
</span><br>
<span class="quotelev1">&gt; v2 - 484 sec
</span><br>
<span class="quotelev1">&gt; v3 -   5 sec
</span><br>
<span class="quotelev1">&gt; Summary Report (2007-06-18 - 2007-06-19 only 'iu')
</span><br>
<span class="quotelev1">&gt; [ 30,059 test_runs]
</span><br>
<span class="quotelev1">&gt; v2 - 479 sec (not seeded)
</span><br>
<span class="quotelev1">&gt; v2 -   2 sec (pre-seeded)
</span><br>
<span class="quotelev1">&gt; v3 -   2 sec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some stats I collected that we need not distribute, but thought were  
</span><br>
<span class="quotelev1">&gt; interesting:
</span><br>
<span class="quotelev1">&gt; Some intersting stats to date (2007-08-20)
</span><br>
<span class="quotelev1">&gt; # test_run results       : 17,522,720
</span><br>
<span class="quotelev1">&gt; # test_build results     :     42,655
</span><br>
<span class="quotelev1">&gt; # mpi_install results    :     45,096
</span><br>
<span class="quotelev1">&gt; # of performance results :     58,365
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Most popular test suites:
</span><br>
<span class="quotelev1">&gt;    intel    : 65.5 %
</span><br>
<span class="quotelev1">&gt;    ibm      : 28.0 %
</span><br>
<span class="quotelev1">&gt;    onesided :  4.3 %
</span><br>
<span class="quotelev1">&gt;    trivial  :  1.5 %
</span><br>
<span class="quotelev1">&gt;    imb      :  0.4 %
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Most popular compilers:
</span><br>
<span class="quotelev1">&gt;    gnu       : 49.8 %
</span><br>
<span class="quotelev1">&gt;    intel     : 30.8 %
</span><br>
<span class="quotelev1">&gt;    sun       :  6.9 %
</span><br>
<span class="quotelev1">&gt;    pathscale :  6.8 %
</span><br>
<span class="quotelev1">&gt;    pgi       :  5.7 %
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OS testing percentages:
</span><br>
<span class="quotelev1">&gt;    Linux: 93.2 %
</span><br>
<span class="quotelev1">&gt;    SunoS:  6.8 %
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Org. Contribution percentages:
</span><br>
<span class="quotelev1">&gt;    Cisco    : 66.4 %
</span><br>
<span class="quotelev1">&gt;    IU       : 23.2 %
</span><br>
<span class="quotelev1">&gt;    Sun      :  6.8 %
</span><br>
<span class="quotelev1">&gt;    IBM      :  2.3 %
</span><br>
<span class="quotelev1">&gt;    HLRS     :  1.3 %
</span><br>
<span class="quotelev1">&gt;    Voltaire :  0.0 %
</span><br>
<span class="quotelev1">&gt;    UTK      :  0.0 %
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 23, 2007, at 12:35 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I think we got good submits to the josh db last night -- I think my
</span><br>
<span class="quotelev2">&gt; &gt; prior problems were pilot error (accidentally sharing scratch
</span><br>
<span class="quotelev2">&gt; &gt; directories between my josh-db testing MTT runs and my production MTT
</span><br>
<span class="quotelev2">&gt; &gt; runs).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://osl.iu.edu/~jjhursey/research/mtt/server/php/reporter.php">http://osl.iu.edu/~jjhursey/research/mtt/server/php/reporter.php</a>?
</span><br>
<span class="quotelev2">&gt; &gt; do_redir=6
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So I think Cisco is happy with the new DB and good for the Monday
</span><br>
<span class="quotelev2">&gt; &gt; rollout plan.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
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
<li><strong>Next message:</strong> <a href="0003.php">Jeff Squyres: "Re: [MTT devel] Cisco submits to Josh DB"</a>
<li><strong>Previous message:</strong> <a href="0001.php">Josh Hursey: "Re: [MTT devel] Cisco submits to Josh DB"</a>
<li><strong>In reply to:</strong> <a href="0001.php">Josh Hursey: "Re: [MTT devel] Cisco submits to Josh DB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0003.php">Jeff Squyres: "Re: [MTT devel] Cisco submits to Josh DB"</a>
<li><strong>Reply:</strong> <a href="0003.php">Jeff Squyres: "Re: [MTT devel] Cisco submits to Josh DB"</a>
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
