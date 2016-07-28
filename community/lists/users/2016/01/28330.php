<?
$subject_val = "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 21 10:53:51 2016" -->
<!-- isoreceived="20160121155351" -->
<!-- sent="Thu, 21 Jan 2016 16:53:47 +0100" -->
<!-- isosent="20160121155347" -->
<!-- name="Thomas Jahns" -->
<!-- email="jahns_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE" -->
<!-- id="56A0FF0B.7010701_at_dkrz.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAFb48S_JVpi5jSf=simF-T9vGeN2+_eZ54v+YhgDumSLEP39rg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE<br>
<strong>From:</strong> Thomas Jahns (<em>jahns_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-21 10:53:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28331.php">Kuhl, Spencer J: "[OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<li><strong>Previous message:</strong> <a href="28329.php">Jeff Hammond: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>In reply to:</strong> <a href="28287.php">Matt Thompson: "[OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28366.php">Dave Love: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<li><strong>Reply:</strong> <a href="28366.php">Dave Love: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Matt,
<br>
<p>On 01/15/2016 03:53 PM, Matt Thompson wrote:
<br>
<span class="quotelev1">&gt; There is a chance in the future I might want/need to query an environment
</span><br>
<span class="quotelev1">&gt; variable in a Fortran program, namely to figure out what switch a currently
</span><br>
<span class="quotelev1">&gt; running process is on (via SLURM_TOPOLOGY_ADDR in my case) and perhaps make a
</span><br>
<span class="quotelev1">&gt; &quot;per-switch&quot; communicator.[1]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I coded up a boring Fortran program whose only exciting lines are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     call MPI_Get_Processor_Name(processor_name,name_length,ierror)
</span><br>
<span class="quotelev1">&gt;     call get_environment_variable(&quot;HOST&quot;,host_name)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     write (*,'(A,X,I4,X,A,X,I4,X,A,X,A)') &quot;Process&quot;, myid, &quot;of&quot;, npes, &quot;is on
</span><br>
<span class="quotelev1">&gt; processor&quot;, trim(processor_name)
</span><br>
<span class="quotelev1">&gt;     write (*,'(A,X,I4,X,A,X,I4,X,A,X,A)') &quot;Process&quot;, myid, &quot;of&quot;, npes, &quot;is on
</span><br>
<span class="quotelev1">&gt; host&quot;, trim(host_name)
</span><br>
<p>just a side-note: the correct way to query the hostname is in this thread on 
<br>
stackoverflow and various Unix/POSIX/Linux books in C:
<br>
<p>&lt;<a href="http://stackoverflow.com/questions/504810/how-do-i-find-the-current-machines-full-hostname-in-c-hostname-and-domain-info">http://stackoverflow.com/questions/504810/how-do-i-find-the-current-machines-full-hostname-in-c-hostname-and-domain-info</a>&gt;
<br>
<p>I'd suggest you wrap that in Fortran's ISO C bindings and use that instead of 
<br>
some fragile environment variable that requires an environment variable to be 
<br>
set up. The process is still not entirely robust because you might end up on a 
<br>
non-RFC-compliant system where name lookup doesn't work.
<br>
<p>Regards, Thomas
<br>
<pre>
-- 
Thomas Jahns
HD(CP)^2
Abteilung Anwendungssoftware
Deutsches Klimarechenzentrum GmbH
Bundesstra&#223;e 45a &#149; D-20146 Hamburg &#149; Germany
Phone:  +49 40 460094-151
Fax:    +49 40 460094-270
Email:  Thomas Jahns &lt;jahns_at_[hidden]&gt;
URL:    www.dkrz.de
Gesch&#228;ftsf&#252;hrer: Prof. Dr. Thomas Ludwig
Sitz der Gesellschaft: Hamburg
Amtsgericht Hamburg HRB 39784

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28330/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28331.php">Kuhl, Spencer J: "[OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<li><strong>Previous message:</strong> <a href="28329.php">Jeff Hammond: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>In reply to:</strong> <a href="28287.php">Matt Thompson: "[OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28366.php">Dave Love: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<li><strong>Reply:</strong> <a href="28366.php">Dave Love: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
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
