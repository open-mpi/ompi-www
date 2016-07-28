<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 15 19:28:03 2005" -->
<!-- isoreceived="20050616002803" -->
<!-- sent="Wed, 15 Jun 2005 20:27:58 -0400" -->
<!-- isosent="20050616002758" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] re build time" -->
<!-- id="2c0d667472b24622ce7dfcdeeb65a5ec_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050615230205.GA26995_at_flying-walenda.ca.sandia.gov" -->
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
<strong>Date:</strong> 2005-06-15 19:27:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0075.php">Jeff Squyres: "Re: [O-MPI users] Questions on status"</a>
<li><strong>Previous message:</strong> <a href="0073.php">Ben Allan: "Re: [O-MPI users] re build time"</a>
<li><strong>In reply to:</strong> <a href="0073.php">Ben Allan: "Re: [O-MPI users] re build time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0081.php">Ben Allan: "Re: [O-MPI users] re build time"</a>
<li><strong>Reply:</strong> <a href="0081.php">Ben Allan: "Re: [O-MPI users] re build time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 15, 2005, at 7:02 PM, Ben Allan wrote:
<br>
<p><span class="quotelev2">&gt;&gt; The ompi_info command was directly derived from the LAM/MPI laminfo
</span><br>
<span class="quotelev2">&gt;&gt; command.  However, I've never liked the fact that there's a &quot;_&quot; in the
</span><br>
<span class="quotelev2">&gt;&gt; name.  Should it be renamed?  Options I see are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I, for obvious reasons (mainly to do with 'well, most projects name it 
</span><br>
<span class="quotelev1">&gt; that'),
</span><br>
<span class="quotelev1">&gt; will vote for open-mpi-config and/or openmpi-config.
</span><br>
<p>Ah -- I thought that that would be a different issue (I presume you're 
<br>
speaking of the compile/lib flags command, like gnome-config et 
<br>
al.)...?  Are you saying that the compile/lib flags should be 
<br>
accessible from ompi_info in a fine-grained fashion as well?  (they're 
<br>
not right now -- only &quot;compile flags&quot; and &quot;link flags&quot;)
<br>
<p>That would obviate using the frameworks like gnome-config (which can 
<br>
read arbitrary *Conf.sh files), or ... er... I swear there was another 
<br>
one, but I can't seem to find it at the moment.  I'm not saying that 
<br>
this is necessarily a Bad Thing; it's just something else that would 
<br>
need to be implemented.
<br>
<p><span class="quotelev1">&gt; In perusing the output of -al from ompi_info, some oddities
</span><br>
<span class="quotelev1">&gt; 1)
</span><br>
<span class="quotelev1">&gt; For us sedders
</span><br>
<span class="quotelev1">&gt; MCA base: seems to have several instances of
</span><br>
<span class="quotelev1">&gt; $heading : parameter $name default {linebreak}
</span><br>
<span class="quotelev1">&gt; 	$somevalue
</span><br>
<span class="quotelev1">&gt; which might be awk friendly, but i'm not sure how sed amateur
</span><br>
<span class="quotelev1">&gt; friendly it is.  Typically this is around long path names.
</span><br>
<p>Did you look at the output when you run with the -parsable flag?  (see 
<br>
my other mail about this)
<br>
<p>The default output is in prettyprint mode, and is more concerned with 
<br>
word wrapping and lining up the :'s that separate the name and the 
<br>
value.  When you run with -parsable, the output is all colon deliminted 
<br>
and no extra whitespace padding is added.
<br>
<p><span class="quotelev1">&gt; 2)
</span><br>
<span class="quotelev1">&gt; A nice catalog of flags used at compile, prefix dirs etc is provided,
</span><br>
<span class="quotelev1">&gt; thank god and or Jeff.
</span><br>
<p>I'm still not sure that you're getting what you want, though.  Note 
<br>
that there's two sets of flags provided by &quot;ompi_info -all&quot; -- the 
<br>
flags that Open MPI was built with and the flags that are added by the 
<br>
wrapper compilers.  Are you just extracting the wrapper compiler flags? 
<br>
&nbsp;&nbsp;Are they sufficient?
<br>
<p>Also note that the wrapper compilers will report their flags to you as 
<br>
well:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpicc -showme
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpicc -showme:compile
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpicc -showme:link
<br>
<p>Finally, is there a reason you can't just use the wrapper compilers 
<br>
themselves?  They can even be layered with other compilers if 
<br>
necessary.  Unless there's a technical reason that you can't, I would 
<br>
strongly advise using the wrapper compilers -- we wrote them for 
<br>
exactly this purpose.
<br>
<p><span class="quotelev1">&gt;  Of course ompi_info --help didn't tell me that.
</span><br>
<p>True.  Extremely little effort has been put into documentation and/or 
<br>
help messages as of yet.  Don't worry; they will be there in the 
<br>
not-distant future (look at LAM's documentation and verbose help 
<br>
messages as an example: I believe in good error messages).
<br>
<p><span class="quotelev1">&gt; However, the compiler variables specify unadorned
</span><br>
<span class="quotelev1">&gt; and hence unuseful names like
</span><br>
<span class="quotelev1">&gt;           C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: g77
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: none
</span><br>
<span class="quotelev1">&gt; which just cause problems on the *very good* chance
</span><br>
<span class="quotelev1">&gt; that the user has a different path or installs new compilers.
</span><br>
<span class="quotelev1">&gt; I can't count the number of times i've &quot;debugged&quot; some user
</span><br>
<span class="quotelev1">&gt; trying to compile c++ code with a mismatched mpic[xx,++] wrapper.
</span><br>
<span class="quotelev1">&gt; Please, extract the full path name to the compilers your
</span><br>
<span class="quotelev1">&gt; wrappers are going to invoke and put them in ompi_info.
</span><br>
<p>Actually, it is whatever was given to configure.  In this case, only 
<br>
&quot;gcc&quot; was given to configure.  For example, if you:
<br>
<p>with
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./configure CC=/path/to/gcc
<br>
<p>You'll see:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: /path/to/gcc
<br>
<p>And that's also the name that mpicc will fork/exec to compile C 
<br>
applications.  I'd prefer to leave it this way for the following 
<br>
reasons:
<br>
<p>- this is the way that I've seen most Autoconf-enabled build systems 
<br>
work
<br>
- if people want to use absolute names for compilers, they can
<br>
- those who don't want absolute names aren't forced to (there's many an 
<br>
installation out there that only has the C bindings and don't give a 
<br>
whit about C++ or Fortran)
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0075.php">Jeff Squyres: "Re: [O-MPI users] Questions on status"</a>
<li><strong>Previous message:</strong> <a href="0073.php">Ben Allan: "Re: [O-MPI users] re build time"</a>
<li><strong>In reply to:</strong> <a href="0073.php">Ben Allan: "Re: [O-MPI users] re build time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0081.php">Ben Allan: "Re: [O-MPI users] re build time"</a>
<li><strong>Reply:</strong> <a href="0081.php">Ben Allan: "Re: [O-MPI users] re build time"</a>
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
