<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Oct 14 07:18:16 2006" -->
<!-- isoreceived="20061014111816" -->
<!-- sent="Fri, 13 Oct 2006 14:11:58 -0700" -->
<!-- isosent="20061013211158" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble with shared libraries" -->
<!-- id="3FF7C869-3E66-431E-A4EE-CAC20E772571_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2D3D5532-63B5-4C47-989D-7D97BACD1375_at_ieee.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-13 17:11:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1981.php">Jeff Squyres: "Re: [OMPI users] PBS problem with OpenMP- only one processor used"</a>
<li><strong>Previous message:</strong> <a href="1979.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
<li><strong>In reply to:</strong> <a href="1970.php">Michael Kluskens: "Re: [OMPI users] Trouble with shared libraries"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There were long, religious debates about exactly this issue in the  
<br>
OMPI developer group.  The end result is pretty much a generalization  
<br>
of what Michael said: our wrappers should do the absolute minimum to  
<br>
compile and link MPI executables.  That is, we provide the -I's, - 
<br>
L's, and -l's necessary to find all the relevant OMPI headers/ 
<br>
libraries, and sometimes a few additional flags required for a  
<br>
consistent executable (e.g., -pthread, if OMPI was compiled with - 
<br>
pthread -- i.e., flags that if OMPI was compiled with them, then MPI  
<br>
apps need to be compiled with them).  But nothing else.
<br>
<p>If we start including arbitrary features such as -rpath/etc., then  
<br>
although we make some users happy, we will undoubtedly break  
<br>
assumptions of other users.
<br>
<p>That being said, OMPI does offer two ways for you to control what the  
<br>
wrapper compilers do:
<br>
<p>1. Use the --with-wrapper-*-flags options to OMPI's configure to  
<br>
directly add flags to the wrapper compilers.
<br>
<p>2. Edit $prefix/share/openmpi/*-wrapper-data.txt.  These text files  
<br>
contain the flags that the wrappers will add (the wrapper compiler  
<br>
program is actually quite dumb; it reads these text files and  
<br>
directly adds those flags to the command line).
<br>
<p>So if you want to add -rpath/etc. to the wrappers, we provide you  
<br>
with the facilities to do so, but do not do so by default.
<br>
<p>Hope that helps!
<br>
<p><p><p>On Oct 12, 2006, at 7:27 AM, Michael Kluskens wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 11, 2006, at 10:38 AM, Lisandro Dalcin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 10/11/06, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI v1.1.1 requires that you set your LD_LIBRARY_PATH to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; include the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directory where its libraries were installed (typically, $prefix/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lib).  Or,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you can use mpirun's --prefix functionality to avoid this
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BTW, Why mpicc/mpicxx does not symply pass a -rpath/-R flag to the
</span><br>
<span class="quotelev2">&gt;&gt; linker? Do you want to select libraries at runtime? There are
</span><br>
<span class="quotelev2">&gt;&gt; portability problem in some target plataform? This behavior can be
</span><br>
<span class="quotelev2">&gt;&gt; really useful to experienced unix users/developers but I am not sure
</span><br>
<span class="quotelev2">&gt;&gt; if this holds true for all users.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It appears that you want to hardcode the path to libraries in the
</span><br>
<span class="quotelev1">&gt; executable?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is a very bad thing to do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Example: you compile your code on your system and run the code on
</span><br>
<span class="quotelev1">&gt; someone else's system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not everyone distributes source code and not everyone wants to
</span><br>
<span class="quotelev1">&gt; compile source code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael
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
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1981.php">Jeff Squyres: "Re: [OMPI users] PBS problem with OpenMP- only one processor used"</a>
<li><strong>Previous message:</strong> <a href="1979.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
<li><strong>In reply to:</strong> <a href="1970.php">Michael Kluskens: "Re: [OMPI users] Trouble with shared libraries"</a>
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
