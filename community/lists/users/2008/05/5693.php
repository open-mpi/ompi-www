<?
$subject_val = "Re: [OMPI users] compiling from source from svn";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 17 04:00:43 2008" -->
<!-- isoreceived="20080517080043" -->
<!-- sent="Sat, 17 May 2008 08:00:35 +0000" -->
<!-- isosent="20080517080035" -->
<!-- name="Karsten Bolding" -->
<!-- email="karsten_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compiling from source from svn" -->
<!-- id="20080517080035.GE21182_at_dbmail.dk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="66538BB8-3BA8-454D-8F3D-545400961828_at_cisco.com" -->
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
<strong>Date:</strong> 2008-05-17 04:00:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5694.php">Karsten Bolding: "Re: [OMPI users] compiling from source from svn"</a>
<li><strong>Previous message:</strong> <a href="5692.php">Jeff Squyres: "Re: [OMPI users] compiling from source from svn"</a>
<li><strong>In reply to:</strong> <a href="5692.php">Jeff Squyres: "Re: [OMPI users] compiling from source from svn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5694.php">Karsten Bolding: "Re: [OMPI users] compiling from source from svn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff
<br>
<p>Whats the fast way specifying an alternative place for libtool for
<br>
building OpenMPI.
<br>
<p>I tried:
<br>
export PATH=/home/kb/local/bin:$PATH
<br>
type libtool
<br>
libtool is /home/kb/local/bin/libtool
<br>
<p>but I still get the same error.
<br>
<p>Karsten
<br>
<p>On Fri, May 16, 2008 at 06:34:19 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On May 16, 2008, at 5:17 PM, Karsten Bolding wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I wonder if our difference is that you're using LT 1.2.26 -- not
</span><br>
<span class="quotelev3">&gt; &gt;&gt; something that I have tried in a long, long time (if ever -- I don't
</span><br>
<span class="quotelev3">&gt; &gt;&gt; remember the last version of the LT 1.2 series that I tried).  Can  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; you
</span><br>
<span class="quotelev3">&gt; &gt;&gt; upgrade to LT 2.2 or higher?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; its 1.5.26 not 1.2.26 and its from Feb 1st 2008 according the the
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry, I meant the 1.5 series, not the 1.2 series.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; libtool download page. And it is what comes with ubuntu (and debian).
</span><br>
<span class="quotelev2">&gt; &gt; 'm not very much in favor of a manual update since I might break other
</span><br>
<span class="quotelev2">&gt; &gt; things.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I tend to believe it is libtool taht is the problem - a pity since  
</span><br>
<span class="quotelev2">&gt; &gt; it is
</span><br>
<span class="quotelev2">&gt; &gt; out of our hands :-).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not really.  You can install your own copy of the AM/AC/LT trio in a  
</span><br>
<span class="quotelev1">&gt; non-default location.  I believe all of the OMPI developers do this --  
</span><br>
<span class="quotelev1">&gt; I personally install all 3 under $HOME/new-gnu.  That way, you don't  
</span><br>
<span class="quotelev1">&gt; screw up a trio that's installed on your system, etc.
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
<li><strong>Next message:</strong> <a href="5694.php">Karsten Bolding: "Re: [OMPI users] compiling from source from svn"</a>
<li><strong>Previous message:</strong> <a href="5692.php">Jeff Squyres: "Re: [OMPI users] compiling from source from svn"</a>
<li><strong>In reply to:</strong> <a href="5692.php">Jeff Squyres: "Re: [OMPI users] compiling from source from svn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5694.php">Karsten Bolding: "Re: [OMPI users] compiling from source from svn"</a>
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
