<?
$subject_val = "Re: [OMPI users] Fwd: Problems installing in Cygwin";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 16:27:30 2008" -->
<!-- isoreceived="20081031202730" -->
<!-- sent="Fri, 31 Oct 2008 16:27:04 -0400" -->
<!-- isosent="20081031202704" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: Problems installing in Cygwin" -->
<!-- id="BA0A2F6D-D003-44A6-9EA3-02299D3556FC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f79359b60810311202pcae1d4eva5045f2dca449c37_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: Problems installing in Cygwin<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-31 16:27:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7172.php">George Bosilca: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Previous message:</strong> <a href="7170.php">Jeff Squyres: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>In reply to:</strong> <a href="7164.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7124.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, I'll CC the VT guys on the ticket and let them know.  They'll  
<br>
likely slurp in whatever fix we do for OMPI into VT.
<br>
<p>FWIW: you can disable the VT package with:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-contrib-no-build=vt
<br>
<p><p>On Oct 31, 2008, at 3:02 PM, Gustavo Seabra wrote:
<br>
<p><span class="quotelev1">&gt; As I keep trying to install OpenMPI in Cygwin, I found another
</span><br>
<span class="quotelev1">&gt; instance where RTFD_NEXT is assumed to be present. Will keep trying...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gustavo.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =============================
</span><br>
<span class="quotelev1">&gt; Making all in vtlib
</span><br>
<span class="quotelev1">&gt; make[5]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/home/seabra/local/openmpi-1.3b1/ompi/contrib/vt/vt/vtlib'
</span><br>
<span class="quotelev1">&gt; gcc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
</span><br>
<span class="quotelev1">&gt; -I../extlib/otf/otflib -I../extlib/otf/otflib     -D_REENTRANT
</span><br>
<span class="quotelev1">&gt; -DBINDIR=\&quot;/home/seabra/local/openmpi-1.3b1/bin\&quot;
</span><br>
<span class="quotelev1">&gt; -DDATADIR=\&quot;/home/seabra/local/openmpi-1.3b1/share/vampirtrace\&quot; -DRFG
</span><br>
<span class="quotelev1">&gt; -DVT_BFD  -DVT_IOWRAP  -O3 -DNDEBUG -finline-functions
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing  -MT vt_comp_gnu.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt; .deps/vt_comp_gnu.Tpo -c -o vt_comp_gnu.o vt_comp_gnu.c
</span><br>
<span class="quotelev1">&gt; mv -f .deps/vt_comp_gnu.Tpo .deps/vt_comp_gnu.Po
</span><br>
<span class="quotelev1">&gt; gcc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
</span><br>
<span class="quotelev1">&gt; -I../extlib/otf/otflib -I../extlib/otf/otflib     -D_REENTRANT
</span><br>
<span class="quotelev1">&gt; -DBINDIR=\&quot;/home/seabra/local/openmpi-1.3b1/bin\&quot;
</span><br>
<span class="quotelev1">&gt; -DDATADIR=\&quot;/home/seabra/local/openmpi-1.3b1/share/vampirtrace\&quot; -DRFG
</span><br>
<span class="quotelev1">&gt; -DVT_BFD  -DVT_IOWRAP  -O3 -DNDEBUG -finline-functions
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing  -MT vt_iowrap.o -MD -MP -MF .deps/vt_iowrap.Tpo
</span><br>
<span class="quotelev1">&gt; -c -o vt_iowrap.o vt_iowrap.c
</span><br>
<span class="quotelev1">&gt; vt_iowrap.c: In function `vt_iowrap_init':
</span><br>
<span class="quotelev1">&gt; vt_iowrap.c:105: error: `RTLD_NEXT' undeclared (first use in this  
</span><br>
<span class="quotelev1">&gt; function)
</span><br>
<span class="quotelev1">&gt; vt_iowrap.c:105: error: (Each undeclared identifier is reported only  
</span><br>
<span class="quotelev1">&gt; once
</span><br>
<span class="quotelev1">&gt; vt_iowrap.c:105: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; vt_iowrap.c: In function `open':
</span><br>
<span class="quotelev1">&gt; vt_iowrap.c:188: error: `RTLD_NEXT' undeclared (first use in this  
</span><br>
<span class="quotelev1">&gt; function)
</span><br>
<span class="quotelev1">&gt; [...and a bunch of messages just like those last 2 lines...]
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="7172.php">George Bosilca: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Previous message:</strong> <a href="7170.php">Jeff Squyres: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>In reply to:</strong> <a href="7164.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7124.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
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
