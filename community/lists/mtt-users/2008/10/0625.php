<?
$subject_val = "[MTT users] [BOLO] MTT can abort on &quot;min_disk_free&quot; check";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 15 11:40:35 2008" -->
<!-- isoreceived="20081015154035" -->
<!-- sent="Wed, 15 Oct 2008 11:40:19 -0400" -->
<!-- isosent="20081015154019" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="[MTT users] [BOLO] MTT can abort on &amp;quot;min_disk_free&amp;quot; check" -->
<!-- id="20081015154019.GF24596_at_sun.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [MTT users] [BOLO] MTT can abort on &quot;min_disk_free&quot; check<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-15 11:40:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0626.php">Ethan Mallove: "[MTT users] Fwd: [Alert] Found server-side submit error messages"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2008/09/0624.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I saw this last night in an MTT run:
<br>
<p>&nbsp;&nbsp;Cannot fork Not enough space at .../lib/MTT/Util.pm line 100
<br>
<p>Util.pm:
<br>
<p>&nbsp;&nbsp;&nbsp;97         # Setup min_disk_free to be a number of bytes
<br>
&nbsp;&nbsp;&nbsp;98         $df_handle = new Filesys::DiskFree;
<br>
&nbsp;&nbsp;&nbsp;99         if ($MTT::Globals::Values-&gt;{min_disk_free} =~ m/([0-9]{1,2})\%/) {
<br>
&nbsp;&nbsp;100             $df_handle-&gt;df();
<br>
&nbsp;&nbsp;101             my $val = $1;
<br>
&nbsp;&nbsp;102             $val /= 100.0;
<br>
&nbsp;&nbsp;103             $val *= $df_handle-&gt;total(cwd());
<br>
&nbsp;&nbsp;104             $val = int($val);
<br>
&nbsp;&nbsp;105             $MTT::Globals::Values-&gt;{min_disk_free} = $val;
<br>
&nbsp;&nbsp;106         }
<br>
<p>I've added a Trace line to my MTT client to see if I can
<br>
determine how a simple &quot;df&quot; caused a croak.
<br>
<p>-Ethan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0626.php">Ethan Mallove: "[MTT users] Fwd: [Alert] Found server-side submit error messages"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2008/09/0624.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
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
