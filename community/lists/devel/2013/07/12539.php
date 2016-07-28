<?
$subject_val = "Re: [OMPI devel] max. message size";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  8 09:20:40 2013" -->
<!-- isoreceived="20130708132040" -->
<!-- sent="Mon, 8 Jul 2013 15:20:34 +0200" -->
<!-- isosent="20130708132034" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] max. message size" -->
<!-- id="51DABCA2.5040705_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20130708150828.87697kzlcn5p6ax8_at_mail.livenet.ch" -->
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
<strong>Subject:</strong> Re: [OMPI devel] max. message size<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-08 09:20:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12540.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Previous message:</strong> <a href="12538.php">mohammad assadsolimani: "[OMPI devel] max. message size"</a>
<li><strong>In reply to:</strong> <a href="12538.php">mohammad assadsolimani: "[OMPI devel] max. message size"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mr mohammad assadsolimani,
<br>
<p>1. your questions belongs to the 'OMPI users' mailing list, this one is for 
<br>
developers.
<br>
<p>2. in MPI, the input parameters are defined to be integers.
<br>
Integers usually are 32bit long (unless you use ILP64 instead of LP64, what is 
<br>
still unusual). So I swear, your program send the messages as byte sequences and 
<br>
thus cannot send more than 2^31 (=2Gb) in one call. Possible solutions:
<br>
- send data in chunks
<br>
- use ILP64 (no idea about Open MPI support it)
<br>
- use constructed data types instead of &quot;bytes&quot;. (using doubles istead of 
<br>
sending the same data as byte sequence lead to 8x raise of the max message size).
<br>
<p>see also
<br>
<a href="http://montecarlo.vtt.fi/mtg/2012_Madrid/Hans_Hammer2.pdf">http://montecarlo.vtt.fi/mtg/2012_Madrid/Hans_Hammer2.pdf</a>
<br>
esp. pp. 6 - 7.
<br>
<p>Best
<br>
<p>Paul
<br>
<p><p>On 07/08/13 15:08, mohammad assadsolimani wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do my PhD in physics and  use a program, which uses openmpi for
</span><br>
<span class="quotelev1">&gt; a sophisticated calculation.
</span><br>
<span class="quotelev1">&gt; But there is a Problem with &quot;max. message size &quot;. That is limited to  ~2GB.
</span><br>
<span class="quotelev1">&gt; I do not know how is called it exactly?!
</span><br>
<span class="quotelev1">&gt; Is there any possibility to extend this memory size?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am very grateful for all of   your help  and thank you in advanced
</span><br>
<span class="quotelev1">&gt; Mohammad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Webmail: <a href="http://mail.livenet.ch">http://mail.livenet.ch</a>
</span><br>
<span class="quotelev1">&gt; Glauben entdecken: <a href="http://www.jesus.ch">http://www.jesus.ch</a>
</span><br>
<span class="quotelev1">&gt; Christliches Webportal: <a href="http://www.livenet.ch">http://www.livenet.ch</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12539/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12540.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Previous message:</strong> <a href="12538.php">mohammad assadsolimani: "[OMPI devel] max. message size"</a>
<li><strong>In reply to:</strong> <a href="12538.php">mohammad assadsolimani: "[OMPI devel] max. message size"</a>
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
