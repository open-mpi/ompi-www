<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 27 16:16:51 2005" -->
<!-- isoreceived="20050927211651" -->
<!-- sent="Tue, 27 Sep 2005 15:17:04 -0600" -->
<!-- isosent="20050927211704" -->
<!-- name="Greg Watson" -->
<!-- email="gwatson_at_[hidden]" -->
<!-- subject="Re:  bproc question" -->
<!-- id="D7D49B46-1FA3-416B-A124-FDDB9123F451_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8b376b62a58b5f7e4a14ca4c9374a1c0_at_open-mpi.org" -->
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
<strong>From:</strong> Greg Watson (<em>gwatson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-27 16:17:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0425.php">Nathan DeBardeleben: "Re:  Back to 32bit on 64bit machines..."</a>
<li><strong>Previous message:</strong> <a href="0423.php">Jeff Squyres: "Re:  bproc question"</a>
<li><strong>In reply to:</strong> <a href="0423.php">Jeff Squyres: "Re:  bproc question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes!!! It worked:
<br>
<p>I have the components installed in /home/gwatson/ompi_install/lib/ 
<br>
openmpi on the front end and in /tmp/ompi/openmpi on the nodes. The  
<br>
two things I need to do are:
<br>
<p>1. Set my LD_LIBRARY_PATH to /home/gwatson/ompi_install/lib:/tmp/ompi  
<br>
so that it picks up the shared libraries on the front end and on the  
<br>
nodes.
<br>
<p>2. Use the following command to run my program 'x':
<br>
<p>orterun --mca mca_component_path /home/gwatson/ompi_install/lib/ 
<br>
openmpi:/tmp/ompi/openmpi -np 2 ./x
<br>
<p>Cheers,
<br>
<p>Greg
<br>
<p>On Sep 27, 2005, at 2:53 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; This exact problem came up in a different context today.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is only a side-effect of us having crummy error messages.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is happening is that OMPI is not finding its components.
</span><br>
<span class="quotelev1">&gt; Specifically, it's looking for the SDS components in this case, not
</span><br>
<span class="quotelev1">&gt; finding them, and then barfing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI, by default, looks in $prefix/lib/openmpi and
</span><br>
<span class="quotelev1">&gt; $HOME/.openmpi/components for its components.  This is set with the
</span><br>
<span class="quotelev1">&gt; &quot;mca_component_path&quot; MCA parameter -- you can certainly change it  
</span><br>
<span class="quotelev1">&gt; to be
</span><br>
<span class="quotelev1">&gt; whatever you need.  For example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; [15:26] odin:~/svn/ompi/ompi/runtime % ompi_info --param mca all
</span><br>
<span class="quotelev1">&gt; [snipped]
</span><br>
<span class="quotelev1">&gt;                   MCA mca: parameter &quot;mca_component_path&quot; (current  
</span><br>
<span class="quotelev1">&gt; value:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;/u/jsquyres/bogus/lib/openmpi:/u/jsquyres/.openmpi components&quot;)
</span><br>
<span class="quotelev1">&gt;                            Path where to look for Open MPI and ORTE
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [snipped]
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So you should be able to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     orteun --mca mca_component_path /path/where/you/have/them ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Disclaimer: this *used* to work, but I haven't tried it in a long  
</span><br>
<span class="quotelev1">&gt; time.
</span><br>
<span class="quotelev1">&gt;   There's no reason that it shouldn't work, but we all know how bit  
</span><br>
<span class="quotelev1">&gt; rot
</span><br>
<span class="quotelev1">&gt; happens...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, be aware that the wrapper compilers are still hard-coded to
</span><br>
<span class="quotelev1">&gt; look in $prefix/lib to link the OMPI/ORTE/OPAL compilers.  You can
</span><br>
<span class="quotelev1">&gt; override that stuff with environment variables if you need to, but  
</span><br>
<span class="quotelev1">&gt; it's
</span><br>
<span class="quotelev1">&gt; not desirable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sidenote: in LAM, we had a single, top-level environment variable  
</span><br>
<span class="quotelev1">&gt; named
</span><br>
<span class="quotelev1">&gt; LAMHOME that would override all this stuff.  However, we found that it
</span><br>
<span class="quotelev1">&gt; *really* confused most users -- there were very, very few instances
</span><br>
<span class="quotelev1">&gt; where there was a genuine need for it.  So we didn't add a single,
</span><br>
<span class="quotelev1">&gt; top-level control like that in OMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 27, 2005, at 4:27 PM, Greg Watson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Trying to install ompi on a bproc machine with no network filesystem.
</span><br>
<span class="quotelev2">&gt;&gt; I've copied the contents of the ompi lib directory into /tmp/ompi on
</span><br>
<span class="quotelev2">&gt;&gt; each node and set my LD_LIBRARY_PATH to /tmp/ompi. However when I run
</span><br>
<span class="quotelev2">&gt;&gt; the program, I get the following error. Any suggestions on what else
</span><br>
<span class="quotelev2">&gt;&gt; I need to do?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greg
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [n0:31161] [NO-NAME] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; orte_init_stage1.c at line 191
</span><br>
<span class="quotelev2">&gt;&gt; [n0:31161] [NO-NAME] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; orte_system_init.c at line 39
</span><br>
<span class="quotelev2">&gt;&gt; [n0:31161] [NO-NAME] ORTE_ERROR_LOG: Not found in file orte_init.c at
</span><br>
<span class="quotelev2">&gt;&gt; line 47
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev2">&gt;&gt;      orted:init-failure
</span><br>
<span class="quotelev2">&gt;&gt; from the file:
</span><br>
<span class="quotelev2">&gt;&gt;      help-orted.txt
</span><br>
<span class="quotelev2">&gt;&gt; But I couldn't find any file matching that name.  Sorry!
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; A daemon (pid 31161) launched by the bproc PLS component on node 0  
</span><br>
<span class="quotelev2">&gt;&gt; died
</span><br>
<span class="quotelev2">&gt;&gt; unexpectedly so we are aborting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may be because the daemon was unable to find all the needed  
</span><br>
<span class="quotelev2">&gt;&gt; shared
</span><br>
<span class="quotelev2">&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to
</span><br>
<span class="quotelev2">&gt;&gt; have the
</span><br>
<span class="quotelev2">&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; [bluesteel.lanl.gov:31160] [0,0,0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev2">&gt;&gt; pls_bproc.c at line 870
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0425.php">Nathan DeBardeleben: "Re:  Back to 32bit on 64bit machines..."</a>
<li><strong>Previous message:</strong> <a href="0423.php">Jeff Squyres: "Re:  bproc question"</a>
<li><strong>In reply to:</strong> <a href="0423.php">Jeff Squyres: "Re:  bproc question"</a>
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
