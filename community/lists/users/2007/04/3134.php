<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 25 10:27:25 2007" -->
<!-- isoreceived="20070425142725" -->
<!-- sent="Wed, 25 Apr 2007 08:27:18 -0600 (MDT)" -->
<!-- isosent="20070425142718" -->
<!-- name="Brian W. Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Disabling Tight Integration with SGE" -->
<!-- id="37948.128.165.0.81.1177511238.squirrel_at_webmail.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="a6bc6cc0704250616t5e25df71udbb8c199ba83c978_at_mail.gmail.com" -->
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
<strong>From:</strong> Brian W. Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-25 10:27:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3135.php">Jeremy Stout: "Re: [OMPI users] Disabling Tight Integration with SGE"</a>
<li><strong>Previous message:</strong> <a href="3133.php">G&#246;tz Waschk: "Re: [OMPI users] Disabling Tight Integration with SGE"</a>
<li><strong>In reply to:</strong> <a href="3132.php">Jeremy Stout: "[OMPI users] Disabling Tight Integration with SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3135.php">Jeremy Stout: "Re: [OMPI users] Disabling Tight Integration with SGE"</a>
<li><strong>Reply:</strong> <a href="3135.php">Jeremy Stout: "Re: [OMPI users] Disabling Tight Integration with SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Is there a command line compile or runtime option to disable tight
</span><br>
<span class="quotelev1">&gt; integration with Sun Grid Engine? I reviewed the FAQ and saw there was
</span><br>
<span class="quotelev1">&gt; a way not to build certain components at compile time. However, I'm
</span><br>
<span class="quotelev1">&gt; not quite sure what it would be in the case of gridengine. Any help
</span><br>
<span class="quotelev1">&gt; would be appreciated.
</span><br>
<p>G&#246;tz was correct on how to disable a component at run-time.  There is a
<br>
way to disable building a list of components at configure time, with the
<br>
--enable-mca-no-build=&lt;components&gt; option.  To disable both of the
<br>
GridEngine components, you would specify:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;--enable-mca-no-build=ras-gridengine,pls-gridengine
<br>
<p>Hope this helps,
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3135.php">Jeremy Stout: "Re: [OMPI users] Disabling Tight Integration with SGE"</a>
<li><strong>Previous message:</strong> <a href="3133.php">G&#246;tz Waschk: "Re: [OMPI users] Disabling Tight Integration with SGE"</a>
<li><strong>In reply to:</strong> <a href="3132.php">Jeremy Stout: "[OMPI users] Disabling Tight Integration with SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3135.php">Jeremy Stout: "Re: [OMPI users] Disabling Tight Integration with SGE"</a>
<li><strong>Reply:</strong> <a href="3135.php">Jeremy Stout: "Re: [OMPI users] Disabling Tight Integration with SGE"</a>
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
