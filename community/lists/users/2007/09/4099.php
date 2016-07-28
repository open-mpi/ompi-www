<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Sep 29 04:37:12 2007" -->
<!-- isoreceived="20070929083712" -->
<!-- sent="Sat, 29 Sep 2007 10:37:00 +0200" -->
<!-- isosent="20070929083700" -->
<!-- name="Massimo Cafaro" -->
<!-- email="massimo.cafaro_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI on 64 bits intel Mac OS X" -->
<!-- id="C83299CB-9651-4944-83BF-F45DB2CF9F5F_at_unile.it" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CBF731EC-6CED-44F5-8848-D6EB0C0078ED_at_open-mpi.org" -->
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
<strong>From:</strong> Massimo Cafaro (<em>massimo.cafaro_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-29 04:37:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4100.php">Tim Prins: "Re: [OMPI users] OpenMPI Giving problems when using -mca btl mx, sm, self"</a>
<li><strong>Previous message:</strong> <a href="4098.php">Hammad Siddiqi: "Re: [OMPI users] OpenMPI Giving problems when using -mca btl mx, sm, self"</a>
<li><strong>In reply to:</strong> <a href="4092.php">Brian Barrett: "Re: [OMPI users] Open MPI on 64 bits intel Mac OS X"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
<p>thank you very much for your suggestion. I have succesfully  
<br>
recompiled Open MPI for 64 bits and it works like a charm. Anyway, it  
<br>
would be nice to have this option available as a configure switch.
<br>
<p>Cheers,
<br>
Massimo
<br>
<p>On Sep 28, 2007, at 3:28 PM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 28, 2007, at 4:56 AM, Massimo Cafaro wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; when I try to compile my MPI code on 64 bits intel Mac OS X the
</span><br>
<span class="quotelev2">&gt;&gt; build fails since the Open MPI library has been compiled using 32
</span><br>
<span class="quotelev2">&gt;&gt; bits. Can you please provide in the next version the ability at
</span><br>
<span class="quotelev2">&gt;&gt; configure time to choose between 32 and 64 bits or even better
</span><br>
<span class="quotelev2">&gt;&gt; compile by defaults using both modes?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To reproduce the problem, simply compile on 64 bits intel Mac OS X
</span><br>
<span class="quotelev2">&gt;&gt; an MPI application using mpicc -arch x86_64. The 64 bits linker
</span><br>
<span class="quotelev2">&gt;&gt; complains as follows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ld64 warning: in /usr/local/mpi/lib/libmpi.dylib, file is not of
</span><br>
<span class="quotelev2">&gt;&gt; required architecture
</span><br>
<span class="quotelev2">&gt;&gt; ld64 warning: in /usr/local/mpi/lib/libopen-rte.dylib, file is not
</span><br>
<span class="quotelev2">&gt;&gt; of required architecture
</span><br>
<span class="quotelev2">&gt;&gt; ld64 warning: in /usr/local/mpi/lib/libopen-pal.dylib, file is not
</span><br>
<span class="quotelev2">&gt;&gt; of required architecture
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and a number of undefined symbols is shown, one for each MPI
</span><br>
<span class="quotelev2">&gt;&gt; function used in the application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is already possible.  Simply use the configure options:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    ./configure ... CFLAGS=&quot;-arch x86_64&quot; CXXFLAGS=&quot;-arch x86_64&quot;
</span><br>
<span class="quotelev1">&gt; OBJCFLAGS=&quot;-arch x86_64&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; also set FFLAGS and FCFLAGS to &quot;-m64&quot; if you have gfortran/g95
</span><br>
<span class="quotelev1">&gt; compiler installed.  The common installs of either don't speak the -
</span><br>
<span class="quotelev1">&gt; arch option, so you have to use the more traditional -m64.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p><pre>
-- 
************************************************************************ 
*******************************
  Massimo Cafaro, Ph.D.                             National  
Nanotechnology Laboratory (NNL/CNR-INFM)
  Assistant Professor                                    Euro- 
Mediterranean Centre for Climate Change
  Dept. of Engineering for Innovation        SPACI Consortium
  University of Salento, Lecce, Italy
  Via per Monteroni                                      Voice  +39  
0832 297371 Fax +39 0832 298173
  73100 Lecce, Italy                                     Web      
<a href="http://sara.unile.it/~cafaro">http://sara.unile.it/~cafaro</a>
  E-mail massimo.cafaro_at_[hidden]             cafaro_at_[hidden]
************************************************************************ 
*******************************

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4099/PGP.sig">This is a digitally signed message part</a>
</ul>
<!-- attachment="PGP.sig" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4100.php">Tim Prins: "Re: [OMPI users] OpenMPI Giving problems when using -mca btl mx, sm, self"</a>
<li><strong>Previous message:</strong> <a href="4098.php">Hammad Siddiqi: "Re: [OMPI users] OpenMPI Giving problems when using -mca btl mx, sm, self"</a>
<li><strong>In reply to:</strong> <a href="4092.php">Brian Barrett: "Re: [OMPI users] Open MPI on 64 bits intel Mac OS X"</a>
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
