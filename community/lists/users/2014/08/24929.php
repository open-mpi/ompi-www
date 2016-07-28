<?
$subject_val = "Re: [OMPI users] How to keep multiple installations at same time";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  5 16:35:23 2014" -->
<!-- isoreceived="20140805203523" -->
<!-- sent="Tue, 05 Aug 2014 16:36:32 -0400" -->
<!-- isosent="20140805203632" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to keep multiple installations at same time" -->
<!-- id="53E14050.7070307_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="53E135CB.3020407_at_calculquebec.ca" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-05 16:36:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24930.php">Syed Ahsan Ali: "Re: [OMPI users] openmpi 1.8.1 error witg gfortran"</a>
<li><strong>Previous message:</strong> <a href="24928.php">Maxime Boissonneault: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<li><strong>In reply to:</strong> <a href="24928.php">Maxime Boissonneault: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for not saying this turn that Environment Modules
<br>
is &quot;outdated and not maintained&quot;.
<br>
That might mislead the OMPI list audience,
<br>
which has a big intersection with Environment Modules users.
<br>
<p>On May 16, 2014, at 4:07 PM, Maxime Boissonneault 
<br>
&lt;maxime.boissonneault_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1"> &gt; Instead of using the outdated and not maintained Module environment,
</span><br>
<span class="quotelev1"> &gt; why not use Lmod : <a href="https://www.tacc.utexas.edu/tacc-projects/lmod">https://www.tacc.utexas.edu/tacc-projects/lmod</a>
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; It is a drop-in replacement for Module environment that supports all
</span><br>
<span class="quotelev1"> &gt; of their features and much, much more, such as :
</span><br>
<span class="quotelev1"> &gt; - module hierarchies
</span><br>
<span class="quotelev1"> &gt; - module properties and color highlighting (we use it to higlight
</span><br>
<span class="quotelev1"> &gt; bioinformatic modules or tools for example)
</span><br>
<span class="quotelev1"> &gt; - module caching (very useful for a parallel filesystem with
</span><br>
<span class="quotelev1"> &gt; tons of modules)
</span><br>
<span class="quotelev1"> &gt; - path priorities (useful to make sure personal modules
</span><br>
<span class="quotelev1"> &gt; take precendence over system modules)
</span><br>
<span class="quotelev1"> &gt; - export module tree to json
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; It works like a charm, understand both TCL and Lua modules
</span><br>
<span class="quotelev1"> &gt; and is  actively developped and debugged. There are litteraly new
</span><br>
<span class="quotelev1"> &gt; features every month or so. If it does not do what you want, odds are
</span><br>
<span class="quotelev1"> &gt; that the developper will add it shortly (I've had it happen).
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; Maxime
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<p>Some of the features introduced by LMod seem to be in the
<br>
works in the Environment modules as well (cache, hierarchies),
<br>
judging from recent mailing list postings.
<br>
<p>I am not sure all of them are essential, though.
<br>
For instance, I am skeptical that most users,
<br>
which are scientifically trained in one way or another,
<br>
would not understand the stack nature of the the enviroment modules
<br>
and make mistakes like the one you mentioned:
<br>
<p><span class="quotelev1"> &gt; module load gcc openmpi_gcc
</span><br>
<span class="quotelev1"> &gt; module unload gcc
</span><br>
<span class="quotelev1"> &gt; module load intel
</span><br>
<p>Unless they were never told about it.
<br>
<p>Hierarchies may simplify the naming convention, but may also work
<br>
as a straitjacket, reflecting the sys admin hierarchical choices,
<br>
but potentially limiting the user choices.
<br>
In one national lab that I have access to,
<br>
navigating their module hierarchy, and specially getting around the
<br>
official one to do what you need/want, is a pain.
<br>
<p>Anyway, this is the OMPI list, not a place for advocacy of either
<br>
package, so I am going to stop here.
<br>
<p>I just wanted to set the record straight that:
<br>
<p>- the Enviroment Modules package is not dead,
<br>
- it has a large user base, and
<br>
- it is sooo good that among other things it opened the road for
<br>
the imitators!  :)
<br>
<p>Thank you,
<br>
Gus Correa
<br>
<p>On 08/05/2014 03:51 PM, Maxime Boissonneault wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The Environment Modules package user base is not negligible,
</span><br>
<span class="quotelev2">&gt;&gt; including many universities, research centers, national labs,
</span><br>
<span class="quotelev2">&gt;&gt; ans private companies, in the US and around the world.
</span><br>
<span class="quotelev2">&gt;&gt; How does the user base of LMod compare?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; The user base certainly is much larger for Environment Modules than LMod.
</span><br>
<span class="quotelev1">&gt; But, as a user of both Lmod and Environment Modules, I can tell you the
</span><br>
<span class="quotelev1">&gt; following :
</span><br>
<span class="quotelev2">&gt;&gt; Regardless of any virtues that LMod may have,
</span><br>
<span class="quotelev2">&gt;&gt; currently I don't see any reason to switch to LMod,
</span><br>
<span class="quotelev2">&gt;&gt; install everything over again
</span><br>
<span class="quotelev1">&gt; Nothing needs reinstalling. Lmod understands Tcl modules and can work
</span><br>
<span class="quotelev1">&gt; fine with your old module tree.
</span><br>
<span class="quotelev2">&gt;&gt; , troubleshoot it,
</span><br>
<span class="quotelev2">&gt;&gt; learn Lua, migrate my modules from Tcl,
</span><br>
<span class="quotelev1">&gt; Again, migration to Lua is not required. Tcl modules gets converted on
</span><br>
<span class="quotelev1">&gt; the fly.
</span><br>
<span class="quotelev2">&gt;&gt; educate my users and convince them to use a new
</span><br>
<span class="quotelev2">&gt;&gt; package to achieve the same exact thing that they currently have,
</span><br>
<span class="quotelev1">&gt; Very little education has to be done. The commands are the same :
</span><br>
<span class="quotelev1">&gt; module avail
</span><br>
<span class="quotelev1">&gt; module load/add
</span><br>
<span class="quotelev1">&gt; module unload/remove
</span><br>
<span class="quotelev1">&gt; module use
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; and in the end gain little if any
</span><br>
<span class="quotelev2">&gt;&gt; relevant/useful/new functionality.
</span><br>
<span class="quotelev1">&gt; If you do not want to make any changes, in the way you organize modules,
</span><br>
<span class="quotelev1">&gt; then don't. You will also get no benefit from changing to Lmod in that
</span><br>
<span class="quotelev1">&gt; situation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you do want to use new features, then there are plenty. Most notably is
</span><br>
<span class="quotelev1">&gt; - the possibility to organize modules in hierarchy   (which you do not
</span><br>
<span class="quotelev1">&gt; HAVE to do, but in my opinion, is much more intuitive).
</span><br>
<span class="quotelev1">&gt; - the possibility to cache the module structure (and avoid reading it
</span><br>
<span class="quotelev1">&gt; from a parallel filesystem every time a user type a module command).
</span><br>
<span class="quotelev1">&gt; - the possibility to color-code modules so that users can find what they
</span><br>
<span class="quotelev1">&gt; want easier out of hundreds of modules
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IF you do use hierarchy, you get the added benefit of avoiding user
</span><br>
<span class="quotelev1">&gt; mistakes such as
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;
</span><br>
<span class="quotelev1">&gt; module load gcc openmpi_gcc
</span><br>
<span class="quotelev1">&gt; module unload gcc
</span><br>
<span class="quotelev1">&gt; module load intel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ... why is my MPI not working!
</span><br>
<span class="quotelev1">&gt; &quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IF you do use hierarchy, you get the added benefit of not having silly
</span><br>
<span class="quotelev1">&gt; module names such as
</span><br>
<span class="quotelev1">&gt; fftw/3.3_gcc4.8_openmpi1.6.3
</span><br>
<span class="quotelev1">&gt; fftw/3.3_gcc4.6_openmpi1.8.1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again, you do NOT have to, but the benefits much outweight the changes
</span><br>
<span class="quotelev1">&gt; that need to be made to get them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My 2 cents,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My two cents of opinion
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 08/05/2014 12:54 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Check the repo - hasn't been touched in a very long time
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 5, 2014, at 9:42 AM, Fabricio Cannini &lt;fcannini_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 05-08-2014 13:10, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Since modules isn't a supported s/w package any more, you might
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; consider using LMOD instead:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="https://www.tacc.utexas.edu/tacc-projects/lmod">https://www.tacc.utexas.edu/tacc-projects/lmod</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Modules isn't supported anymore? :O
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Could you please send a link about it ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/24918.php">http://www.open-mpi.org/community/lists/users/2014/08/24918.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/24919.php">http://www.open-mpi.org/community/lists/users/2014/08/24919.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/24924.php">http://www.open-mpi.org/community/lists/users/2014/08/24924.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24930.php">Syed Ahsan Ali: "Re: [OMPI users] openmpi 1.8.1 error witg gfortran"</a>
<li><strong>Previous message:</strong> <a href="24928.php">Maxime Boissonneault: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<li><strong>In reply to:</strong> <a href="24928.php">Maxime Boissonneault: "Re: [OMPI users] How to keep multiple installations at same time"</a>
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
