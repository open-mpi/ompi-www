<?
$subject_val = "Re: [OMPI users] compiling from source from svn";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 16 17:17:41 2008" -->
<!-- isoreceived="20080516211741" -->
<!-- sent="Fri, 16 May 2008 21:17:35 +0000" -->
<!-- isosent="20080516211735" -->
<!-- name="Karsten Bolding" -->
<!-- email="karsten_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compiling from source from svn" -->
<!-- id="20080516211735.GD21182_at_dbmail.dk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="82972A38-E4E8-4CBC-B904-0DD20A5FF913_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] compiling from source from svn<br>
<strong>From:</strong> Karsten Bolding (<em>karsten_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-16 17:17:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5692.php">Jeff Squyres: "Re: [OMPI users] compiling from source from svn"</a>
<li><strong>Previous message:</strong> <a href="5690.php">Jeff Squyres: "Re: [OMPI users] compiling from source from svn"</a>
<li><strong>In reply to:</strong> <a href="5690.php">Jeff Squyres: "Re: [OMPI users] compiling from source from svn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5692.php">Jeff Squyres: "Re: [OMPI users] compiling from source from svn"</a>
<li><strong>Reply:</strong> <a href="5692.php">Jeff Squyres: "Re: [OMPI users] compiling from source from svn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, May 16, 2008 at 04:06:05 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I am unable to duplicate your problem (I get a failure later in the  
</span><br>
<span class="quotelev1">&gt; build with f90 stuff, but that's likely an issue of finding compatible  
</span><br>
<span class="quotelev1">&gt; compiler flags between ifort and gcc...?).
</span><br>
<p>I've tried with gfortran instead of ifort and .... I get:
<br>
<p>gcc -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread
<br>
-fvisibility=hidden -o .libs/orted orted.o -Wl,--export-dynamic
<br>
../../../orte/.libs/libopen-rte.so -lnsl -lutil -lm  -Wl,--rpath
<br>
-Wl,/opt/openmpi-svn//lib
<br>
../../../orte/.libs/libopen-rte.so: undefined reference to
<br>
`mca_base_select'
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wonder if our difference is that you're using LT 1.2.26 -- not  
</span><br>
<span class="quotelev1">&gt; something that I have tried in a long, long time (if ever -- I don't  
</span><br>
<span class="quotelev1">&gt; remember the last version of the LT 1.2 series that I tried).  Can you  
</span><br>
<span class="quotelev1">&gt; upgrade to LT 2.2 or higher?
</span><br>
<p>its 1.5.26 not 1.2.26 and its from Feb 1st 2008 according the the
<br>
libtool download page. And it is what comes with ubuntu (and debian).
<br>
'm not very much in favor of a manual update since I might break other
<br>
things.
<br>
<p>I tend to believe it is libtool taht is the problem - a pity since it is
<br>
out of our hands :-).
<br>
<p>Karsten
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 16, 2008, at 3:38 PM, Karsten Bolding wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; here is comes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, May 16, 2008 at 03:07:24 -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Truly weird.  Can you send all the information here:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Karsten Bolding                    Bolding &amp; Burchard ApS
</span><br>
<span class="quotelev2">&gt; &gt; Strandgyden 25                     Phone: +45 64422058
</span><br>
<span class="quotelev2">&gt; &gt; DK-5466 Asperup                    Fax:   +45 64422068
</span><br>
<span class="quotelev2">&gt; &gt; Denmark                            Email: karsten_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.findvej.dk/Strandgyden25,5466,11,3">http://www.findvej.dk/Strandgyden25,5466,11,3</a>
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; &lt;ompi-output.tar.gz&gt;&lt;mime-attachment.txt&gt;
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
----------------------------------------------------------------------
Karsten Bolding                    Bolding &amp; Burchard ApS
Strandgyden 25                     Phone: +45 64422058
DK-5466 Asperup                    Fax:   +45 64422068
Denmark                            Email: karsten_at_[hidden]
<a href="http://www.findvej.dk/Strandgyden25,5466,11,3">http://www.findvej.dk/Strandgyden25,5466,11,3</a>
----------------------------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5692.php">Jeff Squyres: "Re: [OMPI users] compiling from source from svn"</a>
<li><strong>Previous message:</strong> <a href="5690.php">Jeff Squyres: "Re: [OMPI users] compiling from source from svn"</a>
<li><strong>In reply to:</strong> <a href="5690.php">Jeff Squyres: "Re: [OMPI users] compiling from source from svn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5692.php">Jeff Squyres: "Re: [OMPI users] compiling from source from svn"</a>
<li><strong>Reply:</strong> <a href="5692.php">Jeff Squyres: "Re: [OMPI users] compiling from source from svn"</a>
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
