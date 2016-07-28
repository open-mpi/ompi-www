<?
$subject_val = "Re: [OMPI users] How to keep multiple installations at same time";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  5 15:51:40 2014" -->
<!-- isoreceived="20140805195140" -->
<!-- sent="Tue, 05 Aug 2014 15:51:39 -0400" -->
<!-- isosent="20140805195139" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to keep multiple installations at same time" -->
<!-- id="53E135CB.3020407_at_calculquebec.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="53E12779.7030309_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to keep multiple installations at same time<br>
<strong>From:</strong> Maxime Boissonneault (<em>maxime.boissonneault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-05 15:51:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24929.php">Gus Correa: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<li><strong>Previous message:</strong> <a href="24927.php">Ralph Castain: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<li><strong>In reply to:</strong> <a href="24924.php">Gus Correa: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24929.php">Gus Correa: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<li><strong>Reply:</strong> <a href="24929.php">Gus Correa: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; The Environment Modules package user base is not negligible,
</span><br>
<span class="quotelev1">&gt; including many universities, research centers, national labs,
</span><br>
<span class="quotelev1">&gt; ans private companies, in the US and around the world.
</span><br>
<span class="quotelev1">&gt; How does the user base of LMod compare?
</span><br>
<span class="quotelev1">&gt;
</span><br>
The user base certainly is much larger for Environment Modules than LMod.
<br>
But, as a user of both Lmod and Environment Modules, I can tell you the 
<br>
following :
<br>
<span class="quotelev1">&gt; Regardless of any virtues that LMod may have,
</span><br>
<span class="quotelev1">&gt; currently I don't see any reason to switch to LMod,
</span><br>
<span class="quotelev1">&gt; install everything over again
</span><br>
Nothing needs reinstalling. Lmod understands Tcl modules and can work 
<br>
fine with your old module tree.
<br>
<span class="quotelev1">&gt; , troubleshoot it,
</span><br>
<span class="quotelev1">&gt; learn Lua, migrate my modules from Tcl,
</span><br>
Again, migration to Lua is not required. Tcl modules gets converted on 
<br>
the fly.
<br>
<span class="quotelev1">&gt; educate my users and convince them to use a new
</span><br>
<span class="quotelev1">&gt; package to achieve the same exact thing that they currently have,
</span><br>
Very little education has to be done. The commands are the same :
<br>
module avail
<br>
module load/add
<br>
module unload/remove
<br>
module use
<br>
...
<br>
<span class="quotelev1">&gt; and in the end gain little if any
</span><br>
<span class="quotelev1">&gt; relevant/useful/new functionality.
</span><br>
If you do not want to make any changes, in the way you organize modules, 
<br>
then don't. You will also get no benefit from changing to Lmod in that 
<br>
situation.
<br>
<p>If you do want to use new features, then there are plenty. Most notably is
<br>
- the possibility to organize modules in hierarchy   (which you do not 
<br>
HAVE to do, but in my opinion, is much more intuitive).
<br>
- the possibility to cache the module structure (and avoid reading it 
<br>
from a parallel filesystem every time a user type a module command).
<br>
- the possibility to color-code modules so that users can find what they 
<br>
want easier out of hundreds of modules
<br>
<p>IF you do use hierarchy, you get the added benefit of avoiding user 
<br>
mistakes such as
<br>
<p>&quot;
<br>
module load gcc openmpi_gcc
<br>
module unload gcc
<br>
module load intel
<br>
<p>... why is my MPI not working!
<br>
&quot;
<br>
<p>IF you do use hierarchy, you get the added benefit of not having silly 
<br>
module names such as
<br>
fftw/3.3_gcc4.8_openmpi1.6.3
<br>
fftw/3.3_gcc4.6_openmpi1.8.1
<br>
...
<br>
<p>Again, you do NOT have to, but the benefits much outweight the changes 
<br>
that need to be made to get them.
<br>
<p>My 2 cents,
<br>
<p>Maxime Boissonneault
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My two cents of opinion
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 08/05/2014 12:54 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Check the repo - hasn't been touched in a very long time
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 5, 2014, at 9:42 AM, Fabricio Cannini &lt;fcannini_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 05-08-2014 13:10, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Since modules isn't a supported s/w package any more, you might 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; consider using LMOD instead:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="https://www.tacc.utexas.edu/tacc-projects/lmod">https://www.tacc.utexas.edu/tacc-projects/lmod</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modules isn't supported anymore? :O
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could you please send a link about it ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/24918.php">http://www.open-mpi.org/community/lists/users/2014/08/24918.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/24919.php">http://www.open-mpi.org/community/lists/users/2014/08/24919.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/24924.php">http://www.open-mpi.org/community/lists/users/2014/08/24924.php</a>
</span><br>
<p><p><pre>
-- 
---------------------------------
Maxime Boissonneault
Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
Ph. D. en physique
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24929.php">Gus Correa: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<li><strong>Previous message:</strong> <a href="24927.php">Ralph Castain: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<li><strong>In reply to:</strong> <a href="24924.php">Gus Correa: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24929.php">Gus Correa: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<li><strong>Reply:</strong> <a href="24929.php">Gus Correa: "Re: [OMPI users] How to keep multiple installations at same time"</a>
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
