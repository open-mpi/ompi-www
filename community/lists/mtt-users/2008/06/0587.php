<?
$subject_val = "Re: [MTT users] Help";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 10 13:16:18 2008" -->
<!-- isoreceived="20080610171618" -->
<!-- sent="Tue, 10 Jun 2008 13:16:07 -0400" -->
<!-- isosent="20080610171607" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Help" -->
<!-- id="20080610171607.GC45521_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5E701717F2B2ED4EA60F87C8AA57B7CC081D905C_at_venom2" -->
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
<strong>Subject:</strong> Re: [MTT users] Help<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-10 13:16:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0588.php">Tim Mattox: "[MTT users] Brief mail services outage today"</a>
<li><strong>Previous message:</strong> <a href="0586.php">Phuong Nguyen: "[MTT users] Help"</a>
<li><strong>Maybe in reply to:</strong> <a href="0586.php">Phuong Nguyen: "[MTT users] Help"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm CC-ing the list, since this is a good question :-)
<br>
<p>On Tue, Jun/10/2008 11:48:04AM, Phuong Nguyen wrote:
<br>
<span class="quotelev1">&gt; Ethan,
</span><br>
<span class="quotelev1">&gt; Is there anyway that I could specify the SVN user/password in the INI
</span><br>
<span class="quotelev1">&gt; file or pass them in command line of &quot;mtt&quot;?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>This should work. E.g.,
<br>
<p>&nbsp;&nbsp;$ client/mtt ... svn_username=&lt;your-username&gt; svn_password=&lt;your-pass&gt;
<br>
<p>Or you could hard code them into your INI file. E.g.,
<br>
<p>&nbsp;&nbsp;[Test get: intel]
<br>
&nbsp;&nbsp;module = SVN
<br>
&nbsp;&nbsp;svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/intel_tests">https://svn.open-mpi.org/svn/ompi-tests/trunk/intel_tests</a>
<br>
&nbsp;&nbsp;svn_username = &lt;your-username&gt;
<br>
&nbsp;&nbsp;svn_password = &lt;your-pass&gt;
<br>
<p>Regards,
<br>
Ethan
<br>
<p><span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Phuong Nguyen
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0588.php">Tim Mattox: "[MTT users] Brief mail services outage today"</a>
<li><strong>Previous message:</strong> <a href="0586.php">Phuong Nguyen: "[MTT users] Help"</a>
<li><strong>Maybe in reply to:</strong> <a href="0586.php">Phuong Nguyen: "[MTT users] Help"</a>
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
