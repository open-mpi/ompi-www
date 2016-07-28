<?
$subject_val = "[OMPI users] openmpi 1.8 error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 17 17:00:14 2015" -->
<!-- isoreceived="20150317210014" -->
<!-- sent="Tue, 17 Mar 2015 20:57:22 +0000 (UTC)" -->
<!-- isosent="20150317205722" -->
<!-- name="Ahmed Salama" -->
<!-- email="ah_salama_eng_eg_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi 1.8 error" -->
<!-- id="335510311.185530.1426625842675.JavaMail.yahoo_at_mail.yahoo.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] openmpi 1.8 error<br>
<strong>From:</strong> Ahmed Salama (<em>ah_salama_eng_eg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-17 16:57:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26489.php">Ahmed Salama: "Re: [OMPI users] how to compile without ib support"</a>
<li><strong>Previous message:</strong> <a href="26487.php">Nathan Hjelm: "Re: [OMPI users] Questions regarding xpmem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26496.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.8 error"</a>
<li><strong>Reply:</strong> <a href="26496.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.8 error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
when i configure openmpi-1.8.2 e.g. $./configure --enable-mpi-java --with-jdk-bindir=/usr/jdk6/bin --with-jdk-headers=/usr/jdk6/include --prefix=/usr/openmpi8&#194;&#160;configure not complete, and I have in end of configure
<br>
onfig.status: executing depfiles commandsconfig.status: executing opal/mca/event/libevent2021/libevent/include/event2/event-config.h commandsopal/mca/event/libevent2021/libevent/include/event2/event-config.h is unchangedconfig.status: executing libtool commands
<br>
, when $make all install, I have have at the end the following error
<br>
&#194;&#160; &#194;&#160; return getData(buffer, index);&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; ^../../../../ompi/mpi/java/java/Struct.java:722: type parameters of &lt;T&gt;T cannot be determined; no unique maximal instance exists for type variable T with upper bounds D,mpi.Struct.Data&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; return s.newData(buffer, offset + field);&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; ^../../../../ompi/mpi/java/java/Struct.java:737: type parameters of &lt;T&gt;T cannot be determined; no unique maximal instance exists for type variable T with upper bounds D,mpi.Struct.Data&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; return s.newData(buffer, offset + field + index * s.extent);&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; ^6 errorsmake[3]: *** [mpi/MPI.class] Error 1make[3]: Leaving directory `/usr/openmpi-1.7.5/ompi/mpi/java/java'make[2]: *** [all-recursive] Error 1make[2]: Leaving directory `/usr/openmpi-1.7.5/ompi/mpi/java'make[1]: *** [all-recursive] Error 1make[1]: Leaving directory `/usr/openmpi-1.7.5/ompi'make: *** [all-recursive] Error 1
<br>
how can i slove this problem
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26488/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26489.php">Ahmed Salama: "Re: [OMPI users] how to compile without ib support"</a>
<li><strong>Previous message:</strong> <a href="26487.php">Nathan Hjelm: "Re: [OMPI users] Questions regarding xpmem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26496.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.8 error"</a>
<li><strong>Reply:</strong> <a href="26496.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.8 error"</a>
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
