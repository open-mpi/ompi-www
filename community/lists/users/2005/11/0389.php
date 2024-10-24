<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov 23 08:38:54 2005" -->
<!-- isoreceived="20051123133854" -->
<!-- sent="Wed, 23 Nov 2005 14:38:44 +0100" -->
<!-- isosent="20051123133844" -->
<!-- name="Max Manfrin" -->
<!-- email="mmanfrin_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Can't configure OpenMPI 1.0 on Mac OS X 10.4.3" -->
<!-- id="2D14E9CE-B707-4723-A38C-21A144C942DB_at_ulb.ac.be" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200511231302.27105.Keller_at_hlrs.de" -->
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
<strong>From:</strong> Max Manfrin (<em>mmanfrin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-23 08:38:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0390.php">Rainer Keller: "Re: [O-MPI users] Can't configure OpenMPI 1.0 on Mac OS X 10.4.3"</a>
<li><strong>Previous message:</strong> <a href="0388.php">Rainer Keller: "Re: [O-MPI users] Can't configure OpenMPI 1.0 on Mac OS X 10.4.3"</a>
<li><strong>In reply to:</strong> <a href="0388.php">Rainer Keller: "Re: [O-MPI users] Can't configure OpenMPI 1.0 on Mac OS X 10.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0390.php">Rainer Keller: "Re: [O-MPI users] Can't configure OpenMPI 1.0 on Mac OS X 10.4.3"</a>
<li><strong>Reply:</strong> <a href="0390.php">Rainer Keller: "Re: [O-MPI users] Can't configure OpenMPI 1.0 on Mac OS X 10.4.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Rainer,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have now tried to configure using the following command line:
<br>
<p>./configure --with-mpi-param_check=always --enable-mpi-threads -- 
<br>
disable-f77 | tee config.LOG
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;but I still got the same error at the same point!!!!
<br>
<p>I reinclude the config.LOG file 
<br>


<br><p>
<p><p>On 23 Nov 2005, at 13:02, Rainer Keller wrote:
<br>
<p><span class="quotelev1">&gt; Dear Max,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You seem to be using gcc and gfortran as Fortran compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As You read in the README - file, we need to set a compiler-flags  
</span><br>
<span class="quotelev1">&gt; to FFLAGS in
</span><br>
<span class="quotelev1">&gt; order to force the fortran compiler to have the &quot;correct&quot; (C)  
</span><br>
<span class="quotelev1">&gt; notion of a
</span><br>
<span class="quotelev1">&gt; logical... (required e.g. for PGI).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, gfortran is not such a compiler (.TRUE. is represented as  
</span><br>
<span class="quotelev1">&gt; int and
</span><br>
<span class="quotelev1">&gt; it's value is 1), so You don't need to set the FFLAGS=&quot;- 
</span><br>
<span class="quotelev1">&gt; Munixlogical&quot;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (we are aware of the general issue and have a patch which is very  
</span><br>
<span class="quotelev1">&gt; probably
</span><br>
<span class="quotelev1">&gt; going to be integrated into openmpi-1.0.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt; Rainer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wednesday 23 November 2005 12:09, Max Manfrin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear *,
</span><br>
<span class="quotelev2">&gt;&gt; 	I'm having some trouble in building the new Open MPI 1.0. The
</span><br>
<span class="quotelev2">&gt;&gt; configure step doesn't go through. I attach the output of the command
</span><br>
<span class="quotelev2">&gt;&gt; in the terminal and the config.LOG file in the file output- 
</span><br>
<span class="quotelev2">&gt;&gt; compile.tgz
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On this machine there is already the Open MPI 1.0rc4 that built
</span><br>
<span class="quotelev2">&gt;&gt; without problem. I attach the result of the ompi_info --all command
</span><br>
<span class="quotelev2">&gt;&gt; in the file ompi_info_1rc4.txt.zip
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	Thanks in advance for any help you might give me.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt; Max MANFRIN
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://iridia.ulb.ac.be/~mmanfrin/">http://iridia.ulb.ac.be/~mmanfrin/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ********************************************************************* 
</span><br>
<span class="quotelev2">&gt;&gt; ******
</span><br>
<span class="quotelev2">&gt;&gt; ** **
</span><br>
<span class="quotelev2">&gt;&gt;  ** ** WARNING:  This email contains an attachment of a very  
</span><br>
<span class="quotelev2">&gt;&gt; suspicious
</span><br>
<span class="quotelev2">&gt;&gt; type.  ** ** You are urged NOT to open this attachment unless you are
</span><br>
<span class="quotelev2">&gt;&gt; absolutely     ** ** sure it is legitmate.  Opening this  
</span><br>
<span class="quotelev2">&gt;&gt; attachment may
</span><br>
<span class="quotelev2">&gt;&gt; cause irreparable    ** ** damage to your computer and your  
</span><br>
<span class="quotelev2">&gt;&gt; files.  If you
</span><br>
<span class="quotelev2">&gt;&gt; have any questions      ** ** about the validity of this message,  
</span><br>
<span class="quotelev2">&gt;&gt; PLEASE
</span><br>
<span class="quotelev2">&gt;&gt; SEEK HELP BEFORE OPENING IT. ** **
</span><br>
<span class="quotelev2">&gt;&gt;                                ** ** This warning was added by the IU
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science Dept. mail scanner.   **
</span><br>
<span class="quotelev2">&gt;&gt; ********************************************************************* 
</span><br>
<span class="quotelev2">&gt;&gt; ******
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Dipl.-Inf. Rainer Keller       email: keller_at_[hidden]
</span><br>
<span class="quotelev1">&gt;   High Performance Computing     Tel: ++49 (0)711-685 5858
</span><br>
<span class="quotelev1">&gt;     Center Stuttgart (HLRS)        Fax: ++49 (0)711-678 7626
</span><br>
<span class="quotelev1">&gt;   POSTAL:Nobelstrasse 19             <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
</span><br>
<span class="quotelev1">&gt;   ACTUAL:Allmandring 30, R. O.030
</span><br>
<span class="quotelev1">&gt;   70550 Stuttgart
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
<p><pre>
----
Max MANFRIN
<a href="http://iridia.ulb.ac.be/~mmanfrin/">http://iridia.ulb.ac.be/~mmanfrin/</a>

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0389/config.tgz">config.tgz</a>
</ul>
<!-- attachment="config.tgz" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0389/PGP.sig">This is a digitally signed message part</a>
</ul>
<!-- attachment="PGP.sig" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0390.php">Rainer Keller: "Re: [O-MPI users] Can't configure OpenMPI 1.0 on Mac OS X 10.4.3"</a>
<li><strong>Previous message:</strong> <a href="0388.php">Rainer Keller: "Re: [O-MPI users] Can't configure OpenMPI 1.0 on Mac OS X 10.4.3"</a>
<li><strong>In reply to:</strong> <a href="0388.php">Rainer Keller: "Re: [O-MPI users] Can't configure OpenMPI 1.0 on Mac OS X 10.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0390.php">Rainer Keller: "Re: [O-MPI users] Can't configure OpenMPI 1.0 on Mac OS X 10.4.3"</a>
<li><strong>Reply:</strong> <a href="0390.php">Rainer Keller: "Re: [O-MPI users] Can't configure OpenMPI 1.0 on Mac OS X 10.4.3"</a>
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
