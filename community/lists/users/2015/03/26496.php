<?
$subject_val = "Re: [OMPI users] openmpi 1.8 error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 18 11:38:14 2015" -->
<!-- isoreceived="20150318153814" -->
<!-- sent="Wed, 18 Mar 2015 15:38:12 +0000" -->
<!-- isosent="20150318153812" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.8 error" -->
<!-- id="33146F1B-4EF7-42B5-B6F2-C4B6E1CEC05B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="335510311.185530.1426625842675.JavaMail.yahoo_at_mail.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.8 error<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-18 11:38:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26497.php">Jeff Squyres (jsquyres): "Re: [OMPI users] how to compile without ib support"</a>
<li><strong>Previous message:</strong> <a href="26495.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configuration error with external hwloc"</a>
<li><strong>In reply to:</strong> <a href="26488.php">Ahmed Salama: "[OMPI users] openmpi 1.8 error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p><span class="quotelev1">&gt; On Mar 17, 2015, at 1:57 PM, Ahmed Salama &lt;ah_salama_eng_eg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when i configure openmpi-1.8.2 e.g. $./configure --enable-mpi-java --with-jdk-bindir=/usr/jdk6/bin --with-jdk-headers=/usr/jdk6/include --prefix=/usr/openmpi8
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; configure not complete, and I have in end of configure
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; onfig.status: executing depfiles commands
</span><br>
<span class="quotelev1">&gt; config.status: executing opal/mca/event/libevent2021/libevent/include/event2/event-config.h commands
</span><br>
<span class="quotelev1">&gt; opal/mca/event/libevent2021/libevent/include/event2/event-config.h is unchanged
</span><br>
<span class="quotelev1">&gt; config.status: executing libtool commands
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; , when $make all install, I have have at the end the following error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     return getData(buffer, index);
</span><br>
<span class="quotelev1">&gt;                   ^
</span><br>
<span class="quotelev1">&gt; ../../../../ompi/mpi/java/java/Struct.java:722: type parameters of &lt;T&gt;T cannot be determined; no unique maximal instance exists for type variable T with upper bounds D,mpi.Struct.Data
</span><br>
<span class="quotelev1">&gt;         return s.newData(buffer, offset + field);
</span><br>
<span class="quotelev1">&gt;                         ^
</span><br>
<span class="quotelev1">&gt; ../../../../ompi/mpi/java/java/Struct.java:737: type parameters of &lt;T&gt;T cannot be determined; no unique maximal instance exists for type variable T with upper bounds D,mpi.Struct.Data
</span><br>
<span class="quotelev1">&gt;         return s.newData(buffer, offset + field + index * s.extent);
</span><br>
<span class="quotelev1">&gt;                         ^
</span><br>
<span class="quotelev1">&gt; 6 errors
</span><br>
<span class="quotelev1">&gt; make[3]: *** [mpi/MPI.class] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/usr/openmpi-1.7.5/ompi/mpi/java/java'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/usr/openmpi-1.7.5/ompi/mpi/java'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/usr/openmpi-1.7.5/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; how can i slove this problem
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26488.php">http://www.open-mpi.org/community/lists/users/2015/03/26488.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26497.php">Jeff Squyres (jsquyres): "Re: [OMPI users] how to compile without ib support"</a>
<li><strong>Previous message:</strong> <a href="26495.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configuration error with external hwloc"</a>
<li><strong>In reply to:</strong> <a href="26488.php">Ahmed Salama: "[OMPI users] openmpi 1.8 error"</a>
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
