<?
$subject_val = "Re: [MTT users] Reporter problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 11:00:48 2008" -->
<!-- isoreceived="20080130160048" -->
<!-- sent="Wed, 30 Jan 2008 11:00:46 -0500" -->
<!-- isosent="20080130160046" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT users] Reporter problems" -->
<!-- id="7ED1EB02-04ED-4981-9315-D5A686F7A9CA_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0EA14150-3D80-40E3-9667-CB73D2009F7C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [MTT users] Reporter problems<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-30 11:00:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0501.php">Ethan Mallove: "Re: [MTT users] Reporter problems"</a>
<li><strong>Previous message:</strong> <a href="0499.php">Jeff Squyres: "Re: [MTT users] 'whatami' patch"</a>
<li><strong>In reply to:</strong> <a href="0496.php">Josh Hursey: "Re: [MTT users] Reporter problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0501.php">Ethan Mallove: "Re: [MTT users] Reporter problems"</a>
<li><strong>Reply:</strong> <a href="0501.php">Ethan Mallove: "Re: [MTT users] Reporter problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This maintenance is complete. The reporter should be operating as  
<br>
normal.
<br>
<p>There are a few other maintenance items, but I am pushing them to the  
<br>
weekend since it will result in a bit of a slowdown again.
<br>
<p>Thanks for your patience.
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On Jan 29, 2008, at 9:47 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; The reporter should be responding much better now. I tweaked the
</span><br>
<span class="quotelev1">&gt; maintenance scripts so they no longer push nearly as hard on the
</span><br>
<span class="quotelev1">&gt; database. They are still running, but the query you specified seems to
</span><br>
<span class="quotelev1">&gt; run in approx. 15-20 sec. with the current load.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 29, 2008, at 8:38 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For the next 24 - 48 hours this is to be expected. Sorry :(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I started some maintenance work last night, and it is taking a bit
</span><br>
<span class="quotelev2">&gt;&gt; longer than I expected (due to integrity constraint checking most
</span><br>
<span class="quotelev2">&gt;&gt; likely). The maintenance scripts are pushing fairly hard on the
</span><br>
<span class="quotelev2">&gt;&gt; database, so I would expect some slowdown with the reporter (and  
</span><br>
<span class="quotelev2">&gt;&gt; maybe
</span><br>
<span class="quotelev2">&gt;&gt; client submits).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If this becomes a substantial problem for anyone please let me know,
</span><br>
<span class="quotelev2">&gt;&gt; and I may be able to shift this work to the weekend. In the mean time
</span><br>
<span class="quotelev2">&gt;&gt; I'll see if I can reduce the load a bit.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 29, 2008, at 7:44 AM, Tim Prins wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Using the reporter this morning it is being awfully slow, as in it  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; taking about 3 minutes to do a top level summary search for:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: past 24 hours
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Org: IU
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Platform name: IU_Odin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't know whether this is a known problem or not. I seem to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; recall
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that after the last database upgrade such a search was taking just a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; few
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seconds.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0501.php">Ethan Mallove: "Re: [MTT users] Reporter problems"</a>
<li><strong>Previous message:</strong> <a href="0499.php">Jeff Squyres: "Re: [MTT users] 'whatami' patch"</a>
<li><strong>In reply to:</strong> <a href="0496.php">Josh Hursey: "Re: [MTT users] Reporter problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0501.php">Ethan Mallove: "Re: [MTT users] Reporter problems"</a>
<li><strong>Reply:</strong> <a href="0501.php">Ethan Mallove: "Re: [MTT users] Reporter problems"</a>
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
