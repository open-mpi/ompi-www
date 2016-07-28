<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb 10 09:16:13 2006" -->
<!-- isoreceived="20060210141613" -->
<!-- sent="Fri, 10 Feb 2006 10:16:28 -0200" -->
<!-- isosent="20060210121628" -->
<!-- name="Alexandre Carissimi" -->
<!-- email="asc_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Anyone has build (used) OpenMPI with BLCR??" -->
<!-- id="43EC841C.7040503_at_inf.ufrgs.br" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="15CFF28A-BB81-4E33-B915-A6FC1B06ED9A_at_open-mpi.org" -->
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
<strong>From:</strong> Alexandre Carissimi (<em>asc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-10 07:16:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0632.php">Galen M. Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Previous message:</strong> <a href="0630.php">Josh Hursey: "Re: [O-MPI users] Anyone has build (used) OpenMPI with BLCR??"</a>
<li><strong>In reply to:</strong> <a href="0630.php">Josh Hursey: "Re: [O-MPI users] Anyone has build (used) OpenMPI with BLCR??"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh;
<br>
<p>Thanks a lot!!
<br>
<p>I was affraid about that.... :)
<br>
<p>I looked at your docummentations but was not sure if it was
<br>
updated or not... so I tried to install/compil openmpi in the
<br>
same way that I used to do with lam... Configure doesn't
<br>
complained about my --with-xyz. I suspected when I saw
<br>
the output from ompi_info....
<br>
<p>I'll continue to be a lam/mpi user for the moment.
<br>
<p>Cheers,
<br>
<p>Alex
<br>
<p><p>Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt;Alex,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Checkpoint/Restart is not supported in Open MPI, at the moment. The  
</span><br>
<span class="quotelev1">&gt;integration of LAM/MPI style of process fault tolerance using a  
</span><br>
<span class="quotelev1">&gt;single process checkpointer (e.g. BLCR) is currently under active  
</span><br>
<span class="quotelev1">&gt;development. Unfortunately, I cannot say exactly when you will see it  
</span><br>
<span class="quotelev1">&gt;released, but keep watching the users list for updates.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Cheers,
</span><br>
<span class="quotelev1">&gt;Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Feb 10, 2006, at 4:25 AM, Alexandre Carissimi wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Hi;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I'm trying to use BLCR to checkpoint OpenMPI applications
</span><br>
<span class="quotelev2">&gt;&gt;but I'm having lots of problems. To begin, I'm note sure that
</span><br>
<span class="quotelev2">&gt;&gt;openmpi recognizes blcr. I compiled open mpi with the
</span><br>
<span class="quotelev2">&gt;&gt;--with options like I used to do with lam versions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;The ompi_info doesn't seems to show blcr support.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Any hints? Someone tryed to do that?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Thanks in advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Alex
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;-- 
</span><br>
<span class="quotelev2">&gt;&gt;___________________________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;CARISSIMI, Alexandre      Universidade Federal do Rio Grande do Sul
</span><br>
<span class="quotelev2">&gt;&gt;asc_at_[hidden]          Instituto de Inform&#225;tica
</span><br>
<span class="quotelev2">&gt;&gt;Tel: +55.51.33.16.61.69   Caixa Postal 15064
</span><br>
<span class="quotelev2">&gt;&gt;Fax: +55.51.33.16.73.08   CEP:91501-970 Porto Alegre - RS - Brasil
</span><br>
<span class="quotelev2">&gt;&gt;___________________________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;----
</span><br>
<span class="quotelev1">&gt;Josh Hursey
</span><br>
<span class="quotelev1">&gt;jjhursey_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
___________________________________________________________________
CARISSIMI, Alexandre      Universidade Federal do Rio Grande do Sul
asc_at_[hidden]          Instituto de Inform&#225;tica
Tel: +55.51.33.16.61.69   Caixa Postal 15064
Fax: +55.51.33.16.73.08   CEP:91501-970 Porto Alegre - RS - Brasil
___________________________________________________________________
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0632.php">Galen M. Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Previous message:</strong> <a href="0630.php">Josh Hursey: "Re: [O-MPI users] Anyone has build (used) OpenMPI with BLCR??"</a>
<li><strong>In reply to:</strong> <a href="0630.php">Josh Hursey: "Re: [O-MPI users] Anyone has build (used) OpenMPI with BLCR??"</a>
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
