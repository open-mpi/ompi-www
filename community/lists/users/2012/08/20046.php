<?
$subject_val = "Re: [OMPI users] &#232;&#189;&#172;&#229;&#143;&#145;&#239;&#188;&#154;lwkmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 28 19:08:01 2012" -->
<!-- isoreceived="20120828230801" -->
<!-- sent="Wed, 29 Aug 2012 01:07:46 +0200" -->
<!-- isosent="20120828230746" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;#232;&amp;#189;&amp;#172;&amp;#229;&amp;#143;&amp;#145;&amp;#239;&amp;#188;&amp;#154;lwkmpi" -->
<!-- id="01B6F781-F62A-4B45-9492-98BCFF9FFC5F_at_staff.uni-marburg.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="503CBFFD.1050008_at_aol.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] &#232;&#189;&#172;&#229;&#143;&#145;&#239;&#188;&#154;lwkmpi<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-28 19:07:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20047.php">Brian Budge: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Previous message:</strong> <a href="20045.php">Ralph Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>In reply to:</strong> <a href="20033.php">Tim Prince: "Re: [OMPI users] &#232;&#189;&#172;&#229;&#143;&#145;&#239;&#188;&#154;lwkmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is only one file where &quot;return { ... };&quot; is used.
<br>
<p>--disable-vt
<br>
<p>seems to fix it.
<br>
<p>-- Reuti
<br>
<p><p>Am 28.08.2012 um 14:56 schrieb Tim Prince:
<br>
<p><span class="quotelev1">&gt; On 8/28/2012 5:11 AM, &#230;&#184;&#133;&#233;&#163;&#142; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ------------------ &#229;&#142;&#159;&#229;&#167;&#139;&#233;&#130;&#174; &#228;&#187;&#182; ------------------
</span><br>
<span class="quotelev2">&gt;&gt; *&#229;&#143;&#145;&#228;&#187;&#182;&#228;&#186;&#186;:* &quot;295187383&quot;&lt;295187383_at_[hidden]&gt;;
</span><br>
<span class="quotelev2">&gt;&gt; *&#229;&#143;&#145;&#233;&#128;&#129;&#230;&#151;&#182;&#233;&#151;&#180;:* 2012&#229;&#185;&#180;8&#230;&#156;&#136;28&#230;&#151;&#165;(&#230;&#152;&#159;&#230;&#156;&#159;&#228;&#186;&#140;) &#228;&#184;&#139;&#229;&#141;&#136;4:13
</span><br>
<span class="quotelev2">&gt;&gt; *&#230;&#148;&#182;&#228;&#187;&#182;&#228;&#186;&#186;:* &quot;users&quot;&lt;users_at_[hidden]&gt;;
</span><br>
<span class="quotelev2">&gt;&gt; *&#228;&#184;&#187;&#233;&#162;&#152;:* lwkmpi
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi everybody,
</span><br>
<span class="quotelev2">&gt;&gt;    I'm trying compile openmpi with intel compiler11.1.07 on ubuntu .
</span><br>
<span class="quotelev2">&gt;&gt;    I compiled openmpi  many times and I could always find a problem. But the error that I'm getting now, gives me no clues where to even search for the problem.
</span><br>
<span class="quotelev2">&gt;&gt;    It seems I have succeed to configure.While I try &quot;make all&quot;,it always show problems below:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    make[7]: &#230;&#173;&#163;&#229;&#156;&#168;&#232;&#191;&#155;&#229;&#133;&#165;&#231;&#155;&#174;&#229;&#189;&#149; `/mnt/Software/openmpi-1.6.1/ompi/contrib/vt/vt/tools/opari/tool'
</span><br>
<span class="quotelev2">&gt;&gt; /opt/intel/Compiler/11.1/072/bin/ia32/icpc -DHAVE_CONFIG_H -I. -I../../..   -DINSIDE_OPENMPI -I/home/lwk/&#230;&#161;&#140;&#233;&#157;&#162;/mnt/Software/openmpi- 1.6.1/opal/mca/hwloc/hwloc132/hwloc /include   -I/usr/include/infiniband -I/usr/include/infiniband  -DOPARI_VT -O3 -DNDEBUG -finline-functions -pthread -MT opari-ompragma_c.o -MD -MP -MF .deps/opari-ompragma_c.Tpo -c -o opari-ompragma_c.o `test -f 'ompragma_c.cc' || echo './'`ompragma_c.cc
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/c++/4.5/iomanip(64): error: expected an expression
</span><br>
<span class="quotelev2">&gt;&gt;    { return { __mask }; }
</span><br>
<span class="quotelev2">&gt;&gt;             ^
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looks like your icpc is too old to work with your g++.  If you want to build with C++ support, you'll need better matching versions of icpc and g++.  icpc support for g++4.7 is expected to release within the next month; icpc 12.1 should be fine with g++ 4.5 and 4.6.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Prince
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20047.php">Brian Budge: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Previous message:</strong> <a href="20045.php">Ralph Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>In reply to:</strong> <a href="20033.php">Tim Prince: "Re: [OMPI users] &#232;&#189;&#172;&#229;&#143;&#145;&#239;&#188;&#154;lwkmpi"</a>
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
