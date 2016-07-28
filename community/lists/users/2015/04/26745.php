<?
$subject_val = "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 16 04:57:37 2015" -->
<!-- isoreceived="20150416085737" -->
<!-- sent="Thu, 16 Apr 2015 10:57:27 +0200" -->
<!-- isosent="20150416085727" -->
<!-- name="Thomas Jahns" -->
<!-- email="jahns_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC" -->
<!-- id="7536EEE5-283C-438A-89B5-90FC86DE7DCE_at_dkrz.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="552DACB6.10505_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC<br>
<strong>From:</strong> Thomas Jahns (<em>jahns_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-16 04:57:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26746.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Previous message:</strong> <a href="26744.php">Howard Pritchard: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<li><strong>In reply to:</strong> <a href="26731.php">Gilles Gouaillardet: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26746.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Reply:</strong> <a href="26746.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>On Apr 15, 2015, at 02:11 , Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; what about reconfiguring Open MPI with LDFLAGS=&quot;-Wl,-rpath,/opt/ 
</span><br>
<span class="quotelev1">&gt; intel/15.0/composer_xe_2015.2.164/compiler/lib/mic&quot; ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IIRC, an other option is : LDFLAGS=&quot;-static-intel&quot;
</span><br>
<p><p>let me first state that I have no experience developing for MIC. But  
<br>
regarding the Intel runtime libraries, the only sane option in my  
<br>
opinion is to use the icc.cfg/ifort.cfg/icpc.cfg files that get put in  
<br>
the same directory as the corresponding compiler binaries and add a  
<br>
line like
<br>
<p>-Wl,-rpath,/path/to/composerxe/lib/intel??
<br>
<p>to that file.
<br>
<p>Regards, Thomas
<br>
<pre>
-- 
Thomas Jahns
DKRZ GmbH, Department: Application software
Deutsches Klimarechenzentrum
Bundesstra&#223;e 45a
D-20146 Hamburg
Phone: +49-40-460094-151
Fax: +49-40-460094-270
Email: Thomas Jahns &lt;jahns_at_[hidden]&gt;
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26745/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26745/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26746.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Previous message:</strong> <a href="26744.php">Howard Pritchard: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<li><strong>In reply to:</strong> <a href="26731.php">Gilles Gouaillardet: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26746.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Reply:</strong> <a href="26746.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
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
