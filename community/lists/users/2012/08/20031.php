<?
$subject_val = "Re: [OMPI users] problem with installing open mpi with	intelcompiler11.1.07 on ubuntu";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 28 07:59:57 2012" -->
<!-- isoreceived="20120828115957" -->
<!-- sent="Tue, 28 Aug 2012 11:59:51 +0000" -->
<!-- isosent="20120828115951" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with installing open mpi with	intelcompiler11.1.07 on ubuntu" -->
<!-- id="957FD008-FC00-44FE-9955-49FDED6B9588_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="16594_1346151470_q7SAvkku031134_tencent_64C5A09275CE0F0958B8D578_at_qq.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with installing open mpi with	intelcompiler11.1.07 on ubuntu<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-28 07:59:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20032.php">Ralph Castain: "Re: [OMPI users] deprecated MCA parameter"</a>
<li><strong>Previous message:</strong> <a href="20030.php">&#199;&#229;&#183;&#231;: "[OMPI users] problem with installing open mpi with intelcompiler11.1.07 on ubuntu"</a>
<li><strong>In reply to:</strong> <a href="20030.php">&#199;&#229;&#183;&#231;: "[OMPI users] problem with installing open mpi with intelcompiler11.1.07 on ubuntu"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try using the 1.6.2 nightly snapshot tarball and see if that fixed your problem. 
<br>
<p>I'm not near a computer to give you the specific link - go to openmpi.org and download and nightly snapshots and the v1.6 series. 
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On Aug 28, 2012, at 6:59 AM, &quot;&#230;&#184;&#133;&#233;&#163;&#142;&quot; &lt;295187383_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi everybody, 
</span><br>
<span class="quotelev1">&gt;   I'm trying compile openmpi with intel compiler11.1.07 on ubuntu . 
</span><br>
<span class="quotelev1">&gt;   I compiled openmpi  many times and I could always find a problem. But the error that I'm getting now, gives me no clues where to even search for the problem. 
</span><br>
<span class="quotelev1">&gt;   It seems I have succeed to configure.While I try &quot;make all&quot;,it always show problems below:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   make[7]:  `/mnt/Software/openmpi-1.6.1/ompi/contrib/vt/vt/tools/opari/tool'
</span><br>
<span class="quotelev1">&gt; /opt/intel/Compiler/11.1/072/bin/ia32/icpc -DHAVE_CONFIG_H -I. -I../../..   -DINSIDE_OPENMPI   -I/home/lwk/desktop/mnt/Software/openmpi-1.6.1/opal/mca/hwloc/hwloc132/hwloc /include   -I/usr/include/infiniband -I/usr/include/infiniband  -DOPARI_VT -O3 -DNDEBUG -finline-functions -pthread -MT opari-ompragma_c.o -MD -MP -MF .deps/opari-ompragma_c.Tpo -c -o opari-ompragma_c.o `test -f 'ompragma_c.cc' || echo './'`ompragma_c.cc
</span><br>
<span class="quotelev1">&gt; /usr/include/c++/4.5/iomanip(64): error: expected an expression
</span><br>
<span class="quotelev1">&gt;   { return { __mask }; }
</span><br>
<span class="quotelev1">&gt;            ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/include/c++/4.5/iomanip(94): error: expected an expression
</span><br>
<span class="quotelev1">&gt;   { return { __mask }; }
</span><br>
<span class="quotelev1">&gt;            ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/include/c++/4.5/iomanip(125): error: expected an expression
</span><br>
<span class="quotelev1">&gt;   { return { __base }; }
</span><br>
<span class="quotelev1">&gt;            ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/include/c++/4.5/iomanip(193): error: expected an expression
</span><br>
<span class="quotelev1">&gt;   { return { __n }; }
</span><br>
<span class="quotelev1">&gt;            ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/include/c++/4.5/iomanip(223): error: expected an expression
</span><br>
<span class="quotelev1">&gt;   { return { __n }; }
</span><br>
<span class="quotelev1">&gt;            ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/include/c++/4.5/iomanip(163): error: expected an expression
</span><br>
<span class="quotelev1">&gt;     { return { __c }; }
</span><br>
<span class="quotelev1">&gt;              ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; compilation aborted for ompragma_c.cc (code 2)
</span><br>
<span class="quotelev1">&gt; make[7]: *** [opari-ompragma_c.o] error 2
</span><br>
<span class="quotelev1">&gt; make[7]:are now leaving directory `/mnt/Software/openmpi-1.6.1/ompi/contrib/vt/vt/tools/opari/tool'
</span><br>
<span class="quotelev1">&gt; make[6]: *** [all-recursive] error 1
</span><br>
<span class="quotelev1">&gt; make[6]:are now leaving directory`/mnt/Software/openmpi-1.6.1/ompi/contrib/vt/vt/tools/opari'
</span><br>
<span class="quotelev1">&gt; make[5]: *** [all-recursive] error 1
</span><br>
<span class="quotelev1">&gt; make[5]:are now leaving directory `/mnt/Software/openmpi-1.6.1/ompi/contrib/vt/vt/tools'
</span><br>
<span class="quotelev1">&gt; make[4]: *** [all-recursive] error 1
</span><br>
<span class="quotelev1">&gt; make[4]:are now leaving directory `/mnt/Software/openmpi-1.6.1/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all] error 2
</span><br>
<span class="quotelev1">&gt; make[3]:are now leaving directory `/mnt/Software/openmpi-1.6.1/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] error 1
</span><br>
<span class="quotelev1">&gt; make[2]:are now leaving directory `/mnt/Software/openmpi-1.6.1/ompi/contrib/vt'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] error 1
</span><br>
<span class="quotelev1">&gt; make[1]:are now leaving directory `/mnt/Software/openmpi-1.6.1/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       My  file &quot;configure.log&quot; and &quot;make.out&quot;  is in accessory lwkmpi.zip.
</span><br>
<span class="quotelev1">&gt;                                  with best regards
</span><br>
<span class="quotelev1">&gt;                                    Liang Wenke
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *****************************************************************************
</span><br>
<span class="quotelev1">&gt; **                                                                         **
</span><br>
<span class="quotelev1">&gt; ** WARNING:  This email contains an attachment of a very suspicious type.  **
</span><br>
<span class="quotelev1">&gt; ** You are urged NOT to open this attachment unless you are absolutely     **
</span><br>
<span class="quotelev1">&gt; ** sure it is legitimate.  Opening this attachment may cause irreparable   **
</span><br>
<span class="quotelev1">&gt; ** damage to your computer and your files.  If you have any questions      **
</span><br>
<span class="quotelev1">&gt; ** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT. **
</span><br>
<span class="quotelev1">&gt; **                                                                         **
</span><br>
<span class="quotelev1">&gt; ** This warning was added by the IU Computer Science Dept. mail scanner.   **
</span><br>
<span class="quotelev1">&gt; *****************************************************************************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;openmpi-1.6.1.zip&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20032.php">Ralph Castain: "Re: [OMPI users] deprecated MCA parameter"</a>
<li><strong>Previous message:</strong> <a href="20030.php">&#199;&#229;&#183;&#231;: "[OMPI users] problem with installing open mpi with intelcompiler11.1.07 on ubuntu"</a>
<li><strong>In reply to:</strong> <a href="20030.php">&#199;&#229;&#183;&#231;: "[OMPI users] problem with installing open mpi with intelcompiler11.1.07 on ubuntu"</a>
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
