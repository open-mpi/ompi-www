<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.0 + PGI 13.6 = undeclared variable __LDBL_MANT_DIG__";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  9 20:42:42 2014" -->
<!-- isoreceived="20140410004242" -->
<!-- sent="Thu, 10 Apr 2014 08:47:46 +0800" -->
<!-- isosent="20140410004746" -->
<!-- name="Filippo Spiga" -->
<!-- email="spiga.filippo_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.0 + PGI 13.6 = undeclared variable __LDBL_MANT_DIG__" -->
<!-- id="70EA5E0F-4EF5-465E-B2B8-E7D8058348BC_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="FBED1EE8-CB9C-456B-89DA-D221399DBD58_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.8.0 + PGI 13.6 = undeclared variable __LDBL_MANT_DIG__<br>
<strong>From:</strong> Filippo Spiga (<em>spiga.filippo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-09 20:47:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24130.php">Ralph Castain: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<li><strong>Previous message:</strong> <a href="24128.php">Ross Boylan: "Re: [OMPI users] Waitall never returns"</a>
<li><strong>In reply to:</strong> <a href="24069.php">Filippo Spiga: "[OMPI users] OpenMPI 1.8.0 + PGI 13.6 = undeclared variable __LDBL_MANT_DIG__"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24152.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.0 + PGI 13.6 = undeclared variable	__LDBL_MANT_DIG__"</a>
<li><strong>Reply:</strong> <a href="24152.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.0 + PGI 13.6 = undeclared variable	__LDBL_MANT_DIG__"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI
<br>
<p>I haven't solve this yet but I managed to move to code to be compatible woth PGI 14.3. Open MPI 1.8 compiles perfectly with the latest PGI.
<br>
<p>In parallel I will push this issue to the PGI forum. 
<br>
<p>Anyway, it is not a blocking factor anymore.
<br>
<p><pre>
--
Filippo SPIGA
* Sent from my iPhone, sorry if I'm brief *
&gt; On 6 Apr 2014, at 21:50, Filippo Spiga &lt;spiga.filippo_at_[hidden]&gt; wrote:
&gt; 
&gt; Dear all,
&gt;  I am trying to compile Open MPI 1.8 with PGI 13.6. I am using on purpose this old version of PGI because of results and performance comparisons with old benchmarks. I run configure in this way:
&gt; 
&gt; ./configure  CC=pgcc CXX=pgCC FC=pgf90 F90=pgfortran CFLAGS=&quot;-noswitcherror&quot; FCFLAGS=&quot;-noswitcherror&quot; CXXFLAGS=&quot;-noswitcherror&quot; --prefix=/usr/local/Cluster-Users/fs395/openmpi-1.8.0/pgi-13.6 --with-hwloc=internal --enable-mca-no-build=btl-usnic --with-verbs
&gt; 
&gt; 
&gt; and here where configure got stuck:
&gt; 
&gt; make[2]: Entering directory `/home/fs395/archive/openmpi-1.8/build/opal/datatype'
&gt;  CCLD     libdatatype_reliable.la
&gt;  CC       opal_convertor.lo
&gt; PGC-S-0039-Use of undeclared variable __LDBL_MANT_DIG__ (../../../opal/util/arch.h: 268)
&gt; PGC/x86 Linux 13.6-0: compilation completed with severe errors
&gt; make[2]: *** [opal_convertor.lo] Error 1
&gt; make[2]: Leaving directory `/home/fs395/archive/openmpi-1.8/build/opal/datatype'
&gt; make[1]: *** [install-recursive] Error 1
&gt; make[1]: Leaving directory `/home/fs395/archive/openmpi-1.8/build/opal'
&gt; make: *** [install-recursive] Error 1
&gt; 
&gt; 
&gt; Any suggestions? Googling does not help much...
&gt; 
&gt; F
&gt; 
&gt; --
&gt; Mr. Filippo SPIGA, M.Sc.
&gt; <a href="http://www.linkedin.com/in/filippospiga">http://www.linkedin.com/in/filippospiga</a> ~ skype: filippo.spiga
&gt; 
&gt; &#194;&#171;Nobody will drive us out of Cantor's paradise.&#194;&#187; ~ David Hilbert
&gt; 
&gt; *****
&gt; Disclaimer: &quot;Please note this message and any attachments are CONFIDENTIAL and may be privileged or otherwise protected from disclosure. The contents are not to be disclosed to anyone other than the addressee. Unauthorized recipients are requested to preserve this confidentiality and to advise the sender immediately of any error in transmission.&quot;
&gt; 
&gt; 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24130.php">Ralph Castain: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<li><strong>Previous message:</strong> <a href="24128.php">Ross Boylan: "Re: [OMPI users] Waitall never returns"</a>
<li><strong>In reply to:</strong> <a href="24069.php">Filippo Spiga: "[OMPI users] OpenMPI 1.8.0 + PGI 13.6 = undeclared variable __LDBL_MANT_DIG__"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24152.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.0 + PGI 13.6 = undeclared variable	__LDBL_MANT_DIG__"</a>
<li><strong>Reply:</strong> <a href="24152.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.0 + PGI 13.6 = undeclared variable	__LDBL_MANT_DIG__"</a>
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
