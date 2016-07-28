<?
$subject_val = "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 23 07:02:37 2008" -->
<!-- isoreceived="20080523110237" -->
<!-- sent="Fri, 23 May 2008 07:02:28 -0400" -->
<!-- isosent="20080523110228" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple" -->
<!-- id="DF4D4249-D550-4C58-BF08-4930DA700490_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF61BABC6A.7B5B94DC-ON48257452.002DD9F6-48257452.002CE7F9_at_cn.ibm.com" -->
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
<strong>Subject:</strong> Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-23 07:02:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2008/06/0586.php">Phuong Nguyen: "[MTT users] Help"</a>
<li><strong>Previous message:</strong> <a href="0584.php">Wen Hao Wang: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>In reply to:</strong> <a href="0584.php">Wen Hao Wang: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0547.php">Ethan Mallove: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 23, 2008, at 4:22 AM, Wen Hao Wang wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for your advice. With the password Brad sent, I found and  
</span><br>
<span class="quotelev1">&gt; downloaded ibm directory of repository ompi-tests. But it seems the  
</span><br>
<span class="quotelev1">&gt; directory does not contain enough files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>See the sample OMPI core testers INI file; you need to run autogen.sh  
<br>
before configure and friends will appear (MTT can do this after the  
<br>
checkout so that the build phase can run the expected &quot;./configure&quot;  
<br>
and &quot;make&quot; steps).  We don't commit generated files like configure to  
<br>
the repository.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2008/06/0586.php">Phuong Nguyen: "[MTT users] Help"</a>
<li><strong>Previous message:</strong> <a href="0584.php">Wen Hao Wang: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>In reply to:</strong> <a href="0584.php">Wen Hao Wang: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0547.php">Ethan Mallove: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
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
