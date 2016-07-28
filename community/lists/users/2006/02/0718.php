<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb 27 11:27:24 2006" -->
<!-- isoreceived="20060227162724" -->
<!-- sent="Mon, 27 Feb 2006 09:27:03 -0700" -->
<!-- isosent="20060227162703" -->
<!-- name="Tim S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memory allocation problem with OpenIB" -->
<!-- id="44032857.7010802_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1141046972.24937.13.camel_at_localhost.localdomain" -->
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
<strong>From:</strong> Tim S. Woodall (<em>twoodall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-27 11:27:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0719.php">Brian Barrett: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Previous message:</strong> <a href="0717.php">Pierre Valiron: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>In reply to:</strong> <a href="0716.php">Emanuel Ziegler: "[OMPI users] Memory allocation problem with OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0724.php">Emanuel Ziegler: "Re: [OMPI users] Memory allocation problem with OpenIB"</a>
<li><strong>Reply:</strong> <a href="0724.php">Emanuel Ziegler: "Re: [OMPI users] Memory allocation problem with OpenIB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Emanuel,
<br>
<p>You might want to try an actual hard limit, say 8GB, rather than
<br>
unlimited. I've run into issues w/ unlimited in the past.
<br>
<p>Thanks,
<br>
Tim
<br>
<p><p>Emanuel Ziegler wrote:
<br>
<span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After solving my last problem with the help of this list (thanks
</span><br>
<span class="quotelev1">&gt; again :) I encountered another problem regarding the memory allocation
</span><br>
<span class="quotelev1">&gt; for the openib component.
</span><br>
<span class="quotelev1">&gt; If I try to run an arbitrary MPI program, e.g. with
</span><br>
<span class="quotelev1">&gt;     $ orterun -np 2 --bynode --host node01,node02 \
</span><br>
<span class="quotelev1">&gt;           --prefix /usr/local ./mpptest -gnuplot
</span><br>
<span class="quotelev1">&gt; the following error appears:
</span><br>
<span class="quotelev1">&gt;     [0,1,1][btl_openib.c:787:mca_btl_openib_module_init] error creating
</span><br>
<span class="quotelev1">&gt;         high priority cq for mthca0 errno says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; Obviously, the error occurs only on node02 and not on the local node01
</span><br>
<span class="quotelev1">&gt; although they are both configured identically. The hosts were cloned
</span><br>
<span class="quotelev1">&gt; using SystemImager and the problem is symmetric (it always fails on the
</span><br>
<span class="quotelev1">&gt; remote host).
</span><br>
<span class="quotelev1">&gt; The FAQ (see
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=infiniband#ib-locked-pages">http://www.open-mpi.org/faq/?category=infiniband#ib-locked-pages</a>) blames
</span><br>
<span class="quotelev1">&gt; that on insufficient user rights for locking memory. So I
</span><br>
<span class="quotelev1">&gt; adjusted /etc/security/limits.conf and set the hard and soft lilit to
</span><br>
<span class="quotelev1">&gt; unlimited, but the error remains. The limits are applied correctly as
</span><br>
<span class="quotelev1">&gt; the command
</span><br>
<span class="quotelev1">&gt;     $ orterun -np 2 --bynode --host node01,node02 \
</span><br>
<span class="quotelev1">&gt;           --prefix /usr/local /bin/bash -c ulimit -l
</span><br>
<span class="quotelev1">&gt;     unlimited
</span><br>
<span class="quotelev1">&gt;     unlimited
</span><br>
<span class="quotelev1">&gt; indicated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The libraries involved are OpenMPI 1.0.2-a7 with libibverbs-1.0-rc5 and
</span><br>
<span class="quotelev1">&gt; libmthca-1.0-rc5 on Debian sarge with kernel 2.6.15 (from
</span><br>
<span class="quotelev1">&gt; www.backports.org). There is 8 GB RAM and 16 GB swap available. While
</span><br>
<span class="quotelev1">&gt; running the program less than 1 GB is used. CQ size is at default
</span><br>
<span class="quotelev1">&gt; (1000).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;   Emanuel
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0719.php">Brian Barrett: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Previous message:</strong> <a href="0717.php">Pierre Valiron: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>In reply to:</strong> <a href="0716.php">Emanuel Ziegler: "[OMPI users] Memory allocation problem with OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0724.php">Emanuel Ziegler: "Re: [OMPI users] Memory allocation problem with OpenIB"</a>
<li><strong>Reply:</strong> <a href="0724.php">Emanuel Ziegler: "Re: [OMPI users] Memory allocation problem with OpenIB"</a>
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
