<?
$subject_val = "Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1' is already defined";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 12 15:08:32 2014" -->
<!-- isoreceived="20140812190832" -->
<!-- sent="Tue, 12 Aug 2014 16:08:38 -0300 (ART)" -->
<!-- isosent="20140812190838" -->
<!-- name="Jorge D'Elia" -->
<!-- email="jdelia_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.8.1: &amp;quot;make all&amp;quot; error: symbol `Lhwloc1' is already defined" -->
<!-- id="1051370524.6299.1407870518445.JavaMail.zimbra_at_intec.unl.edu.ar" -->
<!-- charset="utf-8" -->
<!-- inreplyto="832401031.5772.1407867379743.JavaMail.zimbra_at_intec.unl.edu.ar" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1' is already defined<br>
<strong>From:</strong> Jorge D'Elia (<em>jdelia_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-12 15:08:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25006.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>Previous message:</strong> <a href="25004.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<li><strong>In reply to:</strong> <a href="25002.php">Jorge D'Elia: "Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1' is already defined"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/12/25964.php">Jorge D'Elia: "[OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/12/25964.php">Jorge D'Elia: "[OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Jeff,
<br>
<p>These new versions of the tgz files replace the previous ones:
<br>
I had used an old outdated session environment. However, the 
<br>
configuration and installation was OK again in each case. 
<br>
Sorry for the noise caused by the previous tgz files.
<br>
<p>Regards,
<br>
Jorge.
<br>
<p>----- Mensaje original -----
<br>
<span class="quotelev1">&gt; De: &quot;Jorge D'Elia&quot; &lt;jdelia_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Para: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Enviados: Martes, 12 de Agosto 2014 15:16:19
</span><br>
<span class="quotelev1">&gt; Asunto: Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1' is already defined
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----- Mensaje original -----
</span><br>
<span class="quotelev2">&gt; &gt; De: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Para: &quot;Open MPI User's List&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Enviado: Lunes, 11 de Agosto 2014 11:47:29
</span><br>
<span class="quotelev2">&gt; &gt; Asunto: Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1'
</span><br>
<span class="quotelev2">&gt; &gt; is already defined
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The problem appears to be occurring in the hwloc component in OMPI.
</span><br>
<span class="quotelev2">&gt; &gt; Can you download hwloc 1.7.2 (standalone) and try to build that on
</span><br>
<span class="quotelev2">&gt; &gt; the target machine and see what happens?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     <a href="http://www.open-mpi.org/software/hwloc/v1.7/">http://www.open-mpi.org/software/hwloc/v1.7/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OK. Just in case I tried both version 1.7.2 and 1.9 (stable).
</span><br>
<span class="quotelev1">&gt; Both gave no errors in the configuration or installation.
</span><br>
<span class="quotelev1">&gt; Attached a *.tgz file for each case. Greetings. Jorge.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 10, 2014, at 11:16 AM, Jorge D'Elia &lt;jdelia_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I tried to re-compile Open MPI 1.8.1 version for Linux
</span><br>
<span class="quotelev3">&gt; &gt; &gt; on an ia32 machine with Fedora 14 although using the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; last version of Gfortran (Gfortran 4.10 is required
</span><br>
<span class="quotelev3">&gt; &gt; &gt; by a user program which runs ok).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; However, the &quot;make all&quot; phase breaks with the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error message:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  Error: symbol `Lhwloc1' is already defined
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I attached a tgz file (tar -zcvf) with:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  Output &quot;configure.txt&quot; from &quot;./configure&quot; Open MPI phase;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  The &quot;config.log&quot; file from the top-level Open MPI directory;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  Output &quot;make.txt&quot;    from &quot;make all&quot; to build Open MPI;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  Output &quot;make-v1.txt&quot; from &quot;make V=1&quot; to build Open MPI;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  Outputs from cat /proc/version and cat /proc/cpuinfo
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Please, any clue in order to fix?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Regards in advance.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jorge.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; CIMEC (UNL-CONICET) Predio CONICET-Santa Fe, Colectora Ruta Nac 168,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Paraje El Pozo, S3000GLN Santa Fe, ARGENTINA, <a href="http://www.cimec.org.ar/">http://www.cimec.org.ar/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Tel +54 342 451.15.94/95 ext 1018, fax: +54-342-451.11.69
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt;symbol-already-defined.tgz&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/24953.php">http://www.open-mpi.org/community/lists/users/2014/08/24953.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/24975.php">http://www.open-mpi.org/community/lists/users/2014/08/24975.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25002.php">http://www.open-mpi.org/community/lists/users/2014/08/25002.php</a>
</span><br>
<p><pre>
-- 
CIMEC (UNL-CONICET) Predio CONICET-Santa Fe, Colectora Ruta Nac 168,
Paraje El Pozo, S3000GLN Santa Fe, ARGENTINA, <a href="http://www.cimec.org.ar/">http://www.cimec.org.ar/</a>
Tel +54 342 451.15.94/95 ext 1018, fax: +54-342-451.11.69


</pre>
<p>
<p><p><hr>
<ul>
<li>application/x-compressed-tar attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25005/hwloc-1.7.2-build.tgz">hwloc-1.7.2-build.tgz</a>
</ul>
<!-- attachment="hwloc-1.7.2-build.tgz" -->
<hr>
<ul>
<li>application/x-compressed-tar attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25005/hwloc-1.9-build.tgz">hwloc-1.9-build.tgz</a>
</ul>
<!-- attachment="hwloc-1.9-build.tgz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25006.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>Previous message:</strong> <a href="25004.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<li><strong>In reply to:</strong> <a href="25002.php">Jorge D'Elia: "Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1' is already defined"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/12/25964.php">Jorge D'Elia: "[OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/12/25964.php">Jorge D'Elia: "[OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
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
