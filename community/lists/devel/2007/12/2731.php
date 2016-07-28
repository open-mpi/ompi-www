<?
$subject_val = "Re: [OMPI devel] Using MTT to test the newly added SCTP BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  5 13:46:02 2007" -->
<!-- isoreceived="20071205184602" -->
<!-- sent="Wed, 05 Dec 2007 10:42:43 -0800" -->
<!-- isosent="20071205184243" -->
<!-- name="Karol Mroz" -->
<!-- email="kmroz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Using MTT to test the newly added SCTP BTL" -->
<!-- id="4756F123.1010309_at_cs.ubc.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4750A1FB.3080403_at_cs.ubc.ca" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Using MTT to test the newly added SCTP BTL<br>
<strong>From:</strong> Karol Mroz (<em>kmroz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-05 13:42:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2732.php">Tim Mattox: "[OMPI devel] 32-bit openib is broken on the trunk as of Nov 27th, r16799"</a>
<li><strong>Previous message:</strong> <a href="2730.php">Arlin Davis: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/11/2695.php">Karol Mroz: "Re: [OMPI devel] Using MTT to test the newly added SCTP BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2738.php">Jeff Squyres: "Re: [OMPI devel] Using MTT to test the newly added SCTP BTL"</a>
<li><strong>Reply:</strong> <a href="2738.php">Jeff Squyres: "Re: [OMPI devel] Using MTT to test the newly added SCTP BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi...
<br>
<p>Karol Mroz wrote:
<br>
<p><span class="quotelev1">&gt; Removal of .ompi_ignore should not create build problems for anyone who
</span><br>
<span class="quotelev1">&gt; is running without some form of SCTP support. To test this claim, we
</span><br>
<span class="quotelev1">&gt; built Open MPI with .ompi_ignore removed and no SCTP support on both an
</span><br>
<span class="quotelev1">&gt; ubuntu linux and an OSX machine. Both builds succeeded without any problem.
</span><br>
<p>In light of the above, are there any objections to us removing the
<br>
.ompi_ignore file from the SCTP BTL code?
<br>
<p>I tried to work around this problem by using a pre-installed version of
<br>
Open MPI to run MTT tests on (ibm tests initially) but all I get is a
<br>
short summary from MTT that things succeeded, instead of a detailed list
<br>
of specific test successes/failures as is shown when using a nightly
<br>
tarball. The 'tests' also complete much faster which sparks some concern
<br>
as to whether they were actually run. Furthermore, MTT puts the source
<br>
into a new 'random' directory prior to building (way around this?), so I
<br>
can't add the SCTP directory by hand, and then run the
<br>
build/installation phase. Adding the code on the fly during the
<br>
installation phase also does not work.
<br>
<p>Any advice in this matter?
<br>
<p>Thanks again everyone.
<br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p><pre>
-- 
Karol Mroz
kmroz_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2732.php">Tim Mattox: "[OMPI devel] 32-bit openib is broken on the trunk as of Nov 27th, r16799"</a>
<li><strong>Previous message:</strong> <a href="2730.php">Arlin Davis: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/11/2695.php">Karol Mroz: "Re: [OMPI devel] Using MTT to test the newly added SCTP BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2738.php">Jeff Squyres: "Re: [OMPI devel] Using MTT to test the newly added SCTP BTL"</a>
<li><strong>Reply:</strong> <a href="2738.php">Jeff Squyres: "Re: [OMPI devel] Using MTT to test the newly added SCTP BTL"</a>
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
