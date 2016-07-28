<?
$subject_val = "[OMPI users] problem with installing open mpi with intelcompiler11.1.07 on ubuntu";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 28 06:57:50 2012" -->
<!-- isoreceived="20120828105750" -->
<!-- sent="Tue, 28 Aug 2012 18:57:42 +0800" -->
<!-- isosent="20120828105742" -->
<!-- name="&#199;&#229;&#183;&#231;" -->
<!-- email="295187383_at_[hidden]" -->
<!-- subject="[OMPI users] problem with installing open mpi with intelcompiler11.1.07 on ubuntu" -->
<!-- id="16594_1346151470_q7SAvkku031134_tencent_64C5A09275CE0F0958B8D578_at_qq.com" -->
<!-- charset="gb18030" -->
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
<strong>Subject:</strong> [OMPI users] problem with installing open mpi with intelcompiler11.1.07 on ubuntu<br>
<strong>From:</strong> &#199;&#229;&#183;&#231; (<em>295187383_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-28 06:57:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20031.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem with installing open mpi with	intelcompiler11.1.07 on ubuntu"</a>
<li><strong>Previous message:</strong> <a href="20029.php">jody: "[OMPI users] deprecated MCA parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20031.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem with installing open mpi with	intelcompiler11.1.07 on ubuntu"</a>
<li><strong>Reply:</strong> <a href="20031.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem with installing open mpi with	intelcompiler11.1.07 on ubuntu"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everybody, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;I'm trying  compile openmpi with intel compiler11.1.07 on ubuntu . 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;I compiled openmpi  many times and I could always find  a problem. But the error that I'm getting now, gives me no clues where  to even search for the problem. 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;It seems I have succeed to configure.While I try &quot;make all&quot;,it always show problems below:
<br>

<br>

<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;make[7]:  `/mnt/Software/openmpi-1.6.1/ompi/contrib/vt/vt/tools/opari/tool'
<br>
/opt/intel/Compiler/11.1/072/bin/ia32/icpc  -DHAVE_CONFIG_H -I. -I../../..   -DINSIDE_OPENMPI    -I/home/lwk/desktop/mnt/Software/openmpi-1.6.1/opal/mca/hwloc/hwloc132/hwloc /include   -I/usr/include/infiniband -I/usr/include/infiniband   -DOPARI_VT -O3 -DNDEBUG -finline-functions -pthread -MT  opari-ompragma_c.o -MD -MP -MF .deps/opari-ompragma_c.Tpo -c -o  opari-ompragma_c.o `test -f 'ompragma_c.cc' || echo './'`ompragma_c.cc
<br>
/usr/include/c++/4.5/iomanip(64): error: expected an expression
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{ return { __mask }; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>

<br>
/usr/include/c++/4.5/iomanip(94): error: expected an expression
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{ return { __mask }; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>

<br>
/usr/include/c++/4.5/iomanip(125): error: expected an expression
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{ return { __base }; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>

<br>
/usr/include/c++/4.5/iomanip(193): error: expected an expression
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{ return { __n }; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>

<br>
/usr/include/c++/4.5/iomanip(223): error: expected an expression
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{ return { __n }; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>

<br>
/usr/include/c++/4.5/iomanip(163): error: expected an expression
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{ return { __c }; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>

<br>
compilation aborted for ompragma_c.cc (code 2)
<br>
make[7]: *** [opari-ompragma_c.o] error 2
<br>
make[7]:are now leaving directory `/mnt/Software/openmpi-1.6.1/ompi/contrib/vt/vt/tools/opari/tool'
<br>
make[6]: *** [all-recursive] error 1
<br>
make[6]:are now leaving directory`/mnt/Software/openmpi-1.6.1/ompi/contrib/vt/vt/tools/opari'
<br>
make[5]: *** [all-recursive] error 1
<br>
make[5]:are now leaving directory `/mnt/Software/openmpi-1.6.1/ompi/contrib/vt/vt/tools'
<br>
make[4]: *** [all-recursive] error 1
<br>
make[4]:are now leaving directory `/mnt/Software/openmpi-1.6.1/ompi/contrib/vt/vt'
<br>
make[3]: *** [all] error 2
<br>
make[3]:are now leaving directory `/mnt/Software/openmpi-1.6.1/ompi/contrib/vt/vt'
<br>
make[2]: *** [all-recursive] error 1
<br>
make[2]:are now leaving directory `/mnt/Software/openmpi-1.6.1/ompi/contrib/vt'
<br>
make[1]: *** [all-recursive] error 1
<br>
make[1]:are now leaving directory `/mnt/Software/openmpi-1.6.1/ompi'
<br>
make: *** [all-recursive] error 1
<br>

<br>

<br>

<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My  file &quot;configure.log&quot; and &quot;make.out&quot;  is in accessory lwkmpi.zip.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;with best regards
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Liang Wenke
<br>
<p>*****************************************************************************
<br>
**                                                                         **
<br>
** WARNING:  This email contains an attachment of a very suspicious type.  **
<br>
** You are urged NOT to open this attachment unless you are absolutely     **
<br>
** sure it is legitimate.  Opening this attachment may cause irreparable   **
<br>
** damage to your computer and your files.  If you have any questions      **
<br>
** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT. **
<br>
**                                                                         **
<br>
** This warning was added by the IU Computer Science Dept. mail scanner.   **
<br>
*****************************************************************************
<br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20030/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20030/openmpi-1.6.1.zip">openmpi-1.6.1.zip</a>
</ul>
<!-- attachment="openmpi-1.6.1.zip" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20031.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem with installing open mpi with	intelcompiler11.1.07 on ubuntu"</a>
<li><strong>Previous message:</strong> <a href="20029.php">jody: "[OMPI users] deprecated MCA parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20031.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem with installing open mpi with	intelcompiler11.1.07 on ubuntu"</a>
<li><strong>Reply:</strong> <a href="20031.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem with installing open mpi with	intelcompiler11.1.07 on ubuntu"</a>
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
