<?
$subject_val = "Re: [OMPI devel] Using MTT to test the newly added SCTP BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 06:48:21 2007" -->
<!-- isoreceived="20071206114821" -->
<!-- sent="Thu, 6 Dec 2007 06:48:06 -0500" -->
<!-- isosent="20071206114806" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Using MTT to test the newly added SCTP BTL" -->
<!-- id="F19954CA-87AF-40F3-9BC1-B6372FC65087_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4756F123.1010309_at_cs.ubc.ca" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-06 06:48:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2739.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: remove excess	ompi_btl_openib_connect_base_open call"</a>
<li><strong>Previous message:</strong> <a href="2737.php">Richard Graham: "Re: [OMPI devel] IB pow wow notes"</a>
<li><strong>In reply to:</strong> <a href="2731.php">Karol Mroz: "Re: [OMPI devel] Using MTT to test the newly added SCTP BTL"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 5, 2007, at 1:42 PM, Karol Mroz wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Removal of .ompi_ignore should not create build problems for anyone  
</span><br>
<span class="quotelev2">&gt;&gt; who
</span><br>
<span class="quotelev2">&gt;&gt; is running without some form of SCTP support. To test this claim, we
</span><br>
<span class="quotelev2">&gt;&gt; built Open MPI with .ompi_ignore removed and no SCTP support on  
</span><br>
<span class="quotelev2">&gt;&gt; both an
</span><br>
<span class="quotelev2">&gt;&gt; ubuntu linux and an OSX machine. Both builds succeeded without any  
</span><br>
<span class="quotelev2">&gt;&gt; problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In light of the above, are there any objections to us removing the
</span><br>
<span class="quotelev1">&gt; .ompi_ignore file from the SCTP BTL code?
</span><br>
<p>Thanks for your persistence on this.  :-)
<br>
<p>I think that since no one has objected, you should feel free to do so.
<br>
<p><span class="quotelev1">&gt; I tried to work around this problem by using a pre-installed version  
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev1">&gt; Open MPI to run MTT tests on (ibm tests initially) but all I get is a
</span><br>
<span class="quotelev1">&gt; short summary from MTT that things succeeded, instead of a detailed  
</span><br>
<span class="quotelev1">&gt; list
</span><br>
<span class="quotelev1">&gt; of specific test successes/failures as is shown when using a nightly
</span><br>
<span class="quotelev1">&gt; tarball.
</span><br>
<p>MTT has several different reporters; the default &quot;file&quot; reporter  
<br>
simply outputs a summary to stdout upon completion.  The intention is  
<br>
that the file reporter would be used by developers for quick/ 
<br>
interactive tests to verify that you hadn't broken anything; more  
<br>
details are available in the meta data files in the scratch tree if  
<br>
you know where to look.
<br>
<p>We intended that MTT's database reporter would usually be used for  
<br>
common testing, etc.  The web interface is [by far] the easiest way to  
<br>
drill down in the results to see the details of what you need to know  
<br>
about individual failures, etc.
<br>
<p><span class="quotelev1">&gt; The 'tests' also complete much faster which sparks some concern
</span><br>
<span class="quotelev1">&gt; as to whether they were actually run.
</span><br>
<p>If you just manually add the sctp btl directory to an existing  
<br>
tarball, I'm pretty sure that it won't build.  OMPI's build system is  
<br>
highly dependent upon its &quot;autogen&quot; procedure, which creates a hard- 
<br>
coded list of components to build.  For a tarball, that procedure has  
<br>
already completed, and even if you add in more component directories  
<br>
after you expand the tarball, the hard-coded lists won't be updated,  
<br>
and therefore OMPI's configure/build system will skip them.
<br>
<p><span class="quotelev1">&gt; Furthermore, MTT puts the source
</span><br>
<span class="quotelev1">&gt; into a new 'random' directory prior to building (way around this?),
</span><br>
<p>No.  The internal directory structure of the scratch tree, as you  
<br>
noted, uses random directory names.  This is for two reasons:
<br>
<p>1. because MTT can't know ahead of time what you are going to tell it  
<br>
to do
<br>
2. one obvious way to have non-random directory names is to use the  
<br>
names of the INI file sections as various directory levels.  However,  
<br>
this creates Very, Very Long directory names in the scratch tree and  
<br>
some compilers have a problem with this (even though the total  
<br>
filenames are within the filesystem limit).  Hence, we came up with  
<br>
the scheme of using short, random directory names that will guarantee  
<br>
that the total filename length is short.
<br>
<p>Note that for human convenience, MTT *also* puts in sym links to the  
<br>
short random directory names that correspond to the INI section  
<br>
names.  So if a human needs to go into the scratch tree to investigate  
<br>
some failures, it should be pretty easy to navigate using the sym  
<br>
links (vs. the short/random names).
<br>
<p><span class="quotelev1">&gt; so I
</span><br>
<span class="quotelev1">&gt; can't add the SCTP directory by hand, and then run the
</span><br>
<span class="quotelev1">&gt; build/installation phase. Adding the code on the fly during the
</span><br>
<span class="quotelev1">&gt; installation phase also does not work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any advice in this matter?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again everyone.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Karol Mroz
</span><br>
<span class="quotelev1">&gt; kmroz_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2739.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: remove excess	ompi_btl_openib_connect_base_open call"</a>
<li><strong>Previous message:</strong> <a href="2737.php">Richard Graham: "Re: [OMPI devel] IB pow wow notes"</a>
<li><strong>In reply to:</strong> <a href="2731.php">Karol Mroz: "Re: [OMPI devel] Using MTT to test the newly added SCTP BTL"</a>
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
