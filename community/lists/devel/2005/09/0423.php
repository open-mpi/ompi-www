<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 27 15:53:44 2005" -->
<!-- isoreceived="20050927205344" -->
<!-- sent="Tue, 27 Sep 2005 16:53:35 -0400" -->
<!-- isosent="20050927205335" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  bproc question" -->
<!-- id="8b376b62a58b5f7e4a14ca4c9374a1c0_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F6793505-6A6E-4BB9-A507-BC2101A3867C_at_lanl.gov" -->
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
<strong>Date:</strong> 2005-09-27 15:53:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0424.php">Greg Watson: "Re:  bproc question"</a>
<li><strong>Previous message:</strong> <a href="0422.php">Ralf Wildenhues: "Re:  bproc question"</a>
<li><strong>In reply to:</strong> <a href="0421.php">Greg Watson: "bproc question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0424.php">Greg Watson: "Re:  bproc question"</a>
<li><strong>Reply:</strong> <a href="0424.php">Greg Watson: "Re:  bproc question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This exact problem came up in a different context today.
<br>
<p>This is only a side-effect of us having crummy error messages.  :-(
<br>
<p>What is happening is that OMPI is not finding its components.   
<br>
Specifically, it's looking for the SDS components in this case, not  
<br>
finding them, and then barfing.
<br>
<p>Open MPI, by default, looks in $prefix/lib/openmpi and  
<br>
$HOME/.openmpi/components for its components.  This is set with the  
<br>
&quot;mca_component_path&quot; MCA parameter -- you can certainly change it to be  
<br>
whatever you need.  For example:
<br>
<p>-----
<br>
[15:26] odin:~/svn/ompi/ompi/runtime % ompi_info --param mca all
<br>
[snipped]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mca: parameter &quot;mca_component_path&quot; (current value:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&quot;/u/jsquyres/bogus/lib/openmpi:/u/jsquyres/.openmpi components&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Path where to look for Open MPI and ORTE  
<br>
components
<br>
[snipped]
<br>
-----
<br>
<p>So you should be able to:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orteun --mca mca_component_path /path/where/you/have/them ...
<br>
<p>Disclaimer: this *used* to work, but I haven't tried it in a long time.  
<br>
&nbsp;&nbsp;There's no reason that it shouldn't work, but we all know how bit rot  
<br>
happens...
<br>
<p>However, be aware that the wrapper compilers are still hard-coded to  
<br>
look in $prefix/lib to link the OMPI/ORTE/OPAL compilers.  You can  
<br>
override that stuff with environment variables if you need to, but it's  
<br>
not desirable.
<br>
<p>Sidenote: in LAM, we had a single, top-level environment variable named  
<br>
LAMHOME that would override all this stuff.  However, we found that it  
<br>
*really* confused most users -- there were very, very few instances  
<br>
where there was a genuine need for it.  So we didn't add a single,  
<br>
top-level control like that in OMPI.
<br>
<p><p>On Sep 27, 2005, at 4:27 PM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Trying to install ompi on a bproc machine with no network filesystem.
</span><br>
<span class="quotelev1">&gt; I've copied the contents of the ompi lib directory into /tmp/ompi on
</span><br>
<span class="quotelev1">&gt; each node and set my LD_LIBRARY_PATH to /tmp/ompi. However when I run
</span><br>
<span class="quotelev1">&gt; the program, I get the following error. Any suggestions on what else
</span><br>
<span class="quotelev1">&gt; I need to do?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [n0:31161] [NO-NAME] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; orte_init_stage1.c at line 191
</span><br>
<span class="quotelev1">&gt; [n0:31161] [NO-NAME] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; orte_system_init.c at line 39
</span><br>
<span class="quotelev1">&gt; [n0:31161] [NO-NAME] ORTE_ERROR_LOG: Not found in file orte_init.c at
</span><br>
<span class="quotelev1">&gt; line 47
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev1">&gt;      orted:init-failure
</span><br>
<span class="quotelev1">&gt; from the file:
</span><br>
<span class="quotelev1">&gt;      help-orted.txt
</span><br>
<span class="quotelev1">&gt; But I couldn't find any file matching that name.  Sorry!
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; A daemon (pid 31161) launched by the bproc PLS component on node 0 died
</span><br>
<span class="quotelev1">&gt; unexpectedly so we are aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to
</span><br>
<span class="quotelev1">&gt; have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; [bluesteel.lanl.gov:31160] [0,0,0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; pls_bproc.c at line 870
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<li><strong>Next message:</strong> <a href="0424.php">Greg Watson: "Re:  bproc question"</a>
<li><strong>Previous message:</strong> <a href="0422.php">Ralf Wildenhues: "Re:  bproc question"</a>
<li><strong>In reply to:</strong> <a href="0421.php">Greg Watson: "bproc question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0424.php">Greg Watson: "Re:  bproc question"</a>
<li><strong>Reply:</strong> <a href="0424.php">Greg Watson: "Re:  bproc question"</a>
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
