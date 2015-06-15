<?php
  $topdir = "../..";
  $title = "Getting Help";

  include_once("$topdir/includes/header.inc");
  include_once("$topdir/includes/code.inc");
  include_once("$topdir/software/ompi/current/version.inc");
?>

<p>If you have a bug report and/or patch for Open MPI, you should
probably subscribe to the Open MPI <a href="<?php print($topdir);
?>/community/lists/ompi.php">developer's list</a> and post it there.  Open MPI uses <a
href="https://github.com/open-mpi/ompi/issues">Github issues</a> for
its bug tracking (see the "Bug Tracking" link in the left-hand
navigation).</p>

<p><div align=center><hr width=50%></div></p>

<p>If you have a problem or question, it is highly recommended that
you execute the following steps <strong>in order</strong>.  Many
people have similar problems with configuration and initial setup of
Open MPI -- it is possible that your question has already been
answered.</p>

<OL>

<LI><?php print("<A HREF=\"$topdir/faq/\">Check the Open MPI
FAQ</A>.\n"); ?> We generally take the approach that if the same
question comes up multiple times, we put it on the FAQ.

<P>

<LI><?php print("<A HREF=\"$topdir/community/lists/\">Check the mailing
list archives</A>.\n"); ?> Use the "search" features to check old
posts and see if others have asked the same question and had it
answered.

<P>

<LI> If you do not find a solution to your problem in the above
resources, send the following information to the Open MPI user's
mailing list (see the <A HREF="<?php print($topdir);
?>/community/lists/">mailing lists</a> page for more information) --
<strong>please compress the files (e.g., with bzip2) before sending
them!</strong>

<p> <strong><font color="red">Note:</font></strong>
The mailing lists have a 250kb limit on messages to prevent from
sending enormous, uncompressed datatsets.  If your attachment is
larger than this, please post it on the web somewhere for people to
download.  Thanks.

<UL>

  <p><LI>Remember: the more information you include in your report,
  the better.  E-mails simply stating, "It doesn't work!" are not
  helpful; we need to know as much information about your environment
  as possible in order to provide meaningful assistance.  <strong>The
  best way to get help</strong> is to provide a "recipie" for
  reproducing the problem.  This will allow the Open MPI developers to
  see the error for themselves, and therefore be able to fix it.</LI>

  <P><LI><STRONG>Use a descriptive "subject" line in your
   email!</STRONG> Some Open MPI question-answering people decide
   whether to read a mail based on its subject line (e.g., to see if
   it's a question that they can answer).  So please plese please use
   a good subject line that succinctly describes your problem.</LI>

  <P><LI><STRONG>For run-time problems</STRONG>:
    <OL>

      <LI> <a href=" <?php print($topdir); ?>/faq/">Check the FAQ
           first</a>.  Really.  This can save you a <em>lot</em> of
           time; many common problems and solutions are listed
           there.</LI>

      <LI> The version of Open MPI that you're using.</LI>

      <LI> The <code>config.log</code> file from the top-level Open
           MPI directory, if available (<strong>please
           compress, e.g., with bzip2!</strong>).</LI>

      <LI> The output of the "<code>ompi_info --all</code>" command
           from the node where you're invoking <code>mpirun</code>.

      <LI> If you have questions or problems about process affinity /
           binding, send the output from running the "lstopo -v"
           command from a recent version of <a href="<?php
           print($topdir); ?>/projects/hwloc/">hwloc</a>.  <em>The
           detailed text output is preferable to a graphical
           output.</em>

      <LI> If running on more than one node -- especially if you're
           having problems launching Open MPI processes -- also include
           the output of the "<code>ompi_info -v ompi full
           --parsable</code>" command <em><strong>from each node on
           which you're trying to run.</strong></em>

           <br><br>
           <ol>
           <li> If you are able to launch MPI processes, you can use
                <code>mpirun</code> to gather this information.  For
                example, if the file <code>my_hostfile.txt</code>
                contains the hostnames of the machines on which you
                are trying to run Open MPI processes:

<?php print_code("shell$ mpirun --bynode <strong>--hostfile my_hostfile.txt</strong> --tag-output ompi_info -v ompi full --parsable"); ?>
          </li>

          <li> If you cannot launch MPI processes, use some other
               mechanism -- such as <code>ssh</code> (or
               <code>rsh</code>) -- to gather this information.  For
               example, if the file <code>my_hostfile.txt</code>
               contains the hostnames of the machines on which you are
               trying to run Open MPI processes:

<p>
<table cellpadding="5" border="0" width="90%" align="center">
<tr>
<th width="50%">C-style shell (e.g., csh)</th>
<th width="50%">Bourne-style shell (e.g., sh, bash)</th>
</tr>

<tr>
<td valign="top">
<?php print_code("shell% foreach h (`cat my_hostfile.txt`)
foreach? echo === \$h
foreach? ssh \$h ompi_info -v ompi full --parsable
foreach? end");
?>
</td>
<td valign="top">
<?php print_code("shell$ for h in `cat my_hostfile.txt`
> do
> echo === \$h
> ssh \$h ompi_info -v ompi full --parsable
> done");
?>
</td>
</tr>
</table>
</p>
          </li>
          </ol>
      </LI>
      <LI> A <em>detailed</em> description of what is failing.  The
           more details that you provide, the better.  E-mails saying
           "My application doesn't work!" will inevitably be answered
           with requests for more information about <em>exactly what
           doesn't work</em>; so please include as much information
           detailed in your initial e-mail as possible.  We strongly
           recommend that you include the following information:

	   <UL>

	   <LI> The exact command used to run your application.</LI>

	   <LI> Any relevant MCA parameters that were set (or unset)
                when you ran (from either the command line, environment,
                parameter file, etc.).</LI>

           <LI> The value of the PATH and LD_LIBRARY_PATH environment
                variables (did you set them correctly to point to all
                relevant executables, the Open MPI libraries, and any
                required support libraries, such as libraries required
                for high-speed networks such as InfiniBand and/or
                Myrinet?).</LI>

	   </UL></LI>

      <LI> Please include information about your network:

           <UL>

	   <LI> For Myrinet-based networks, include the information <a
                href="<?php print($topdir);
                ?>/faq/?category=myrinet#myri-troubleshoot">listed
                in this FAQ entry</a>.</LI>

	   <LI> For InfiniBand-based networks, include the information
                <a href="<?php print($topdir);
                ?>/faq/?category=openfabrics#ofa-troubleshoot">listed
                in this FAQ entry</a>.</LI>

           <LI> For TCP-based networks, include the output of the
               <code>ifconfig</code> command on all relevant nodes.
               Note that some Linux distributions do not put
               <code>ifconfig</code> in the default PATH of normal
               users; look for it in <code>/sbin/ifconfig</code> or
               <code>/usr/sbin/ifconfig</code>.</LI>

	   </UL></LI>

    </OL>

  <P><LI><STRONG>For compile problems</STRONG>:
    <OL>

    <LI> The version of Open MPI that you're using.</LI>

    <LI> <em>All</em> output (both compilation output and run time
    output, including all error messages)</LI>

    <LI> Output from when you ran "<code>./configure</code>" to
    configure Open MPI (<strong>please compress, e.g., with
    bzip2!</strong>)</LI>

    <LI> The <code>config.log</code> file from the top-level Open MPI
    directory (<strong>please compress, e.g., with
    bzip2!</strong>)</LI>

    <LI> Output from when you ran "<code>make V=1</code>" to build
    Open MPI (<strong>please compress, e.g., with
    bzip2!</strong>)</LI>

    <LI> Output from when you ran "<code>make install</code>" to
    install Open MPI (<strong>please compress, e.g., with
    bzip2!</strong>)</LI>

    </OL>
</UL>

    <P>To capture the output of the configure and make steps you can use
    the script command or the following technique if using a csh style
    shell:

<?php print_code("shell% ./configure {options} |& tee config.out
shell% make all              |& tee make.out
shell% make install          |& tee make-install.out"); ?>

<p> or if using a Bourne style shell:

<?php print_code("shell$ ./configure {options} 2>&1 | tee config.out
shell$ make all 2>&1              | tee make.out
shell$ make install 2>&1          | tee make-install.out"); ?>

<P>To compress all the files listed above, we recommend first
redirecting the files listed above to a unique directory:</p>

<p>
<table cellpadding="5" border="0" width="90%" align="center">
<tr>
<th width="50%">C-style shell (e.g., csh)</th>
<th width="50%">Bourne-style shell (e.g., sh, bash)</th>
</tr>

<tr>
<td valign="top">
<?php print_code("shell% mkdir \$HOME/ompi-output
shell% cd /path/to/ompi-$ver_current
shell% ./configure |& tee \$HOME/ompi-output/configure.out
#...lots of output...
shell% cp config.log opal/include/opal_config.h \$HOME/ompi-output
shell% make all |& tee \$HOME/ompi-output/make.out
#...lots of output...
shell% make install |& tee \$HOME/ompi-output/make-install.out
#...lots of output...");
?>
</td>
<td valign="top">
<?php print_code("shell$ mkdir \$HOME/ompi-output
shell$ cd /path/to/ompi-$ver_current
shell$ ./configure 2>&1 | tee \$HOME/ompi-output/configure.out
#...lots of output...
shell$ cp config.log opal/include/opal_config.h \$HOME/ompi-output
shell$ make all 2>&1 | tee \$HOME/ompi-output/make.out
#...lots of output...
shell$ make install 2>&1 | tee \$HOME/ompi-output/make-install.out
#...lots of output..."); ?>
</td>
</tr>
</table>
</p>

<p> Then create a compressed tarball of that directory to send to the
mailing list.  If you have GNU Tar, you can do this in one step.  If
you do not have GNU Tar, you might have to use two steps:

</p>
<table cellpadding="5" border="0" width="90%" align="center">
<tr>
<th width="50%">GNU Tar</th>
<th width="50%">Non-GNU Tar</th>
</tr>

<tr>
<td valign="top">
<?php print_code("shell% cd \$HOME
shell% tar jcvf ompi-output.tar.bz2 ompi-output
#...lots of output...
shell% "); ?>
</td>
<td valign="top">
<?php print_code("shell% cd \$HOME
shell% tar cvf ompi-output.tar ompi-output
#...lots of output...
shell% bzip2 ompi-output.tar
shell% "); ?>
</td>
</tr>
</table>
</p>

<P> Then send the resulting <code>ompi-output.tar.bz2</code> file to the
mailing list.</p>

<p><strong>NOTE:</strong> The mailing lists <em>do</em> have size
limits on attachments.  If your post is rejected because the
attachment is too large, try compressing at a higher level.  If that
does not work, then try posting your file on the internet somewhere and
sending a link to it on the list.

</ol>

<P> Make today an Open MPI day!

<?php
  include_once("$topdir/includes/footer.inc");
