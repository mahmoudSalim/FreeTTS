<!DOCTYPE html PUBLIC "-//IETF//DTD HTML 2.0//EN">
<!--

/**
 * Copyright (c) 2001 Sun Microsystems, Inc.
 * 
 * See the file "license.terms" for information on usage and
 * redistribution of this file, and for a DISCLAIMER OF ALL 
 * WARRANTIES.
 */

-->
<html>

<head>
<meta name="generator" content="HTML Tidy, see www.w3.org">
<title>FreeTTS - A speech synthesizer written entirely in the Java(TM) programming language</title>
</head>

<body bgcolor="white">

<center>
  <table bgcolor="#bbbae2" border="0" width="100%">
      <tr>
	<td align=center width="100%">
	<h2><i>FreeTTS</i> - A speech synthesizer written entirely in the Java<sup><font size="-1">TM</font></sup> programming language</h2>
	</td>
      </tr>
  </table>

</center>

<table border="0" width="100%">

<tr>

<td bgcolor="#eeeeff" valign="top" width="20%">
<center>
<p><br><b>Listen to <i>FreeTTS!</i></b>

</center>

<font size="-1">


<p><b>Talking clock:</b>
<br><a href="audio/12-35.au">AU</a> format
<br><a href="audio/12-35.wav">WAV</a> format


<p><b>Talking machine (8k voice):</b>
<br><a href="audio/talkforever.au">AU</a> format
<br><a href="audio/talkforever.wav">WAV</a> format


<p><b>Talking machine (16k voice):</b>
<br><a href="audio/talkforever16.au">AU</a> format
<br><a href="audio/talkforever16.wav">WAV</a> format


<p><b>Susie (16k):</b>
<br><a href="audio/shoeshineshop.au">AU</a> format
<br><a href="audio/shoeshineshop.wav">WAV</a> format


<p><b>Cookie Cooks (16k):</b>
<br><a href="audio/cookiecooks.au">AU</a> format
<br><a href="audio/cookiecooks.wav">WAV</a> format
</font>
<hr>
<center>
<b><font>FreeTTS Links</font>
</center>
<font size="-1">
<!-- <b><font color="#ff0000">FreeTTS Links</font> -->
<br> <a href="http://sourceforge.net/projects/freetts"> Project Page</a>
<br> <a href="https://sourceforge.net/forum/?group_id=42080"> Forums</a>
<br> <a href="http://sourceforge.net/project/showfiles.php?group_id=42080"> Download</a>
<br> <a href="http://sourceforge.net/cvs/?group_id=42080"> CVS
Repository</a>
<br>
<br>
<br>
<hr>
<center>
<a href="http://www.sourceforge.net">
<IMG src="http://sourceforge.net/sflogo.php?group_id=40785&type=1"
	width="88" height="31" border="0" alt="SourceForge Logo"> </a>
	<br> Hosted by SourceForge.net
</center>

</font>


</td>


<td width="5%">
</td>

<td width="50%">

<br><b><i>Welcome!</i></b> Thank you for choosing <i>FreeTTS</i>.

<h3>General Information</h3>

<ul>
<li><a href="#what_is_freetts">Introduction</a></li>
<li><a href="#who_authors">Authors</a></li>
<li><a href="RELEASE_NOTES">Release Notes</a></li>

<!-- <li><a href="#what_files">Files included in the distribution</a></li> -->

<li><a href="#possible_uses">Possible uses of FreeTTS</a></li>
<li><a href="#acknowledgments">Acknowledgments</a></li>
</ul>

<h3>Installation</h3>

<ul>
<li><a href="#prerequisites">Prerequisites for building and running</a></li>
<li><a href="#how_build">Building FreeTTS</a></li>
<li><a href="#how_test">Testing FreeTTS</a></li>
</ul>

<h3>Demos</h3>

<ul>
<li><a href="#run_demo">Running the demos</a></li>
</ul>

<h3>Documentation</h3>

<ul>
<li><a href="#freetts_api">API documentation</a>
<li><a href="ProgrammerGuide.html">Programmer's Guide</a>
<li><a href="#writing_software">Writing software with FreeTTS</a></li>
</ul>

<h3>Frequently Asked Questions</h3>

<ul>
<li><a href="#why_jdk1.4">Why must I use Java<sup><font size="-1">TM</font></sup> 2 SDK, Standard Edition, v 1.4?</a></li>
<li><a href="#performance">How does FreeTTS perform?</a></li>
<li><a href="#why_sound_bad">Why does the diphone synthesizer sound so bad?</a></li>
<li><a href="#why_alan_lalala">Why does the 'alan' voice say "lalalala"?</a></li>
<li><a href="#output_to_file">How do I output synthesized speech to an audio file?</a></li>
<li><a href="#voices_available">What voices are available?</a></li>
<li><a href="#is_full_jsapi">Does FreeTTS provide full support for the JSAPI 1.0
specification?</a></li>
<li><a href="#import_voice_data">How do I import new voice data from Festival or Flite?</a></li>
<li><a href="#linux_sound">Why do the demos keep crashing when I run on Linux?</a></li>
<li><a href="#no_jsapi">Why do I get a NoClassDefFoundError when I try
to run a demo?</a></li>
<li><a href="#old_java">Why do I get an UnsupportedClassVersionError  when I try to run a demo?</a></li>
<li><a href="#where_is_recognizer">Where is the speech recognizer?</a></li>
</ul>

<br>

</td>


 <td bgcolor="#eeeeff" valign="top" width="25%">
 <center>
 <br><b>Latest News </b> <br>
 </center>
 <?php include('http://sourceforge.net/export/projnews.php?group_id=42080&limit=6&flat=1&show_summaries=1'); ?>
 </td>
</tr>
</table>



<hr>



<h3>General Information about FreeTTS</h3>

<ul>

<li><a name="what_is_freetts"><b>Introduction</b></a></li>
<p>FreeTTS is a speech synthesis system written entirely in the Java<sup><font size="-1">TM</font></sup> programming language. It is based upon <a href="http://www.cmuflite.org">Flite</a>: a small run-time speech synthesis engine developed at Carnegie Mellon University. Flite is derived from the <a href="http://www.cstr.ed.ac.uk/projects/festival/">Festival</a> Speech Synthesis System from 
the University of Edinburgh and the <a href="http://festvox.org/">FestVox</a> project from Carnegie Mellon University.</p>

<p>This release of FreeTTS includes:</p>

<ul>
<li>Core speech synthesis engine</li>
<li>Support for three voices: an 8khz diphone, a 16khz diphone voice and a 16khz limited domain voice</li>
<li>Partial support for JSAPI 1.0</li>
<li>Extensive API documentation</li>
</ul>


<p>
<li><a name="who_authors"><b>Authors</b></a></li>
<p>FreeTTS was built by the 
 <a href="http://research.sun.com/research/speech/index.html">Speech
 Integration Group</a> of <a href="http://research.sun.com">Sun
 Microsystems Laboratories</a>:<p>
<ul>
       <li>  Willie Walker, Manager and Principal Investigator
	<li> Paul Lamere, Staff Engineer
	<li> Philip Kwok, Member of Technical Staff
</ul>

<p>
You can contact the
Sun Microsystems Speech Integration Group through the 
<a href="https://sourceforge.net/forum/?group_id=42080"> FreeTTS
Forums</a>.
<p>
FreeTTS is based on <a href="http://www.cmuflite.org">CMU's Flite</a>, written by:
<p>
<ul>
          <li>Alan Black
          <li>Kevin Lenzo
</ul>
<p>
Kevin and Alan generated the data used by FreeTTS.  In addition, Kevin is the voice 
behind the diphone voices (kevin 8k, kevin 16k), and Alan is the voice behind 
the speaking clock.



<!--
<p>
<li><a name="what_files"><b>Files included in the distribution</b></a></li>

<p>
<ul>
<li><a href="README.txt">README.txt</a> - provides an overview of the FreeTTS package</li>
<li><a href="RELEASE_NOTES">RELEASE_NOTES</a> - describes the change history for the FreeTTS package</li>
<li><a href="../license.terms">license.terms</a> - licensing terms for FreeTTS </li>
<li><a href="../acknowledgments.txt">acknowledgments.txt</a> - acknowledges contributors to FreeTTS</li>
<li><a href="../Makefile">Makefile</a> - top level Makefile for building FreeTTS</li>
<li><a href="../build">build</a> - contains GNU Make rules for building FreeTTS</li>
<li><a href="../demo">demo</a> - contains demos of FreeTTS 

<ul>
<li><a href="../demo/JSAPI">JSAPI</a> - contains demos that use JSAPI 1.0

<ul>
<li><a href="../demo/JSAPI/Emacspeak/README.html">Emacspeak</a> - contains Emacspeak demo</li>
<li><a href="../demo/JSAPI/HelloWorld/README.html">HelloWorld</a> - contains simple JSAPI HelloWorld demo</li>

<li><a href="../demo/JSAPI/MixedVoices/README.html">MixedVoices</a> - contains JSAPI multiple voice/synthesizer demo</li>

<li><a href="../demo/JSAPI/Player/README.html">Player</a> - Swing demo that monitors and manipulates a JSAPI synthesizer</li>
</ul>
</li>

<li><a href="../demo/freetts">freetts</a> - contains low-level, non-JSAPI demos 

<ul>
<li><a href="../demo/freetts/HelloWorld/README.html">HelloWorld</a> - non-JSAPI hello world demo</li>
<li><a href="../demo/freetts/ClientServer/README.html">ClientServer</a> - demonstrates using FreeTTS as a TTS server</li>
</ul>
</li>

<li><a href="../demo/util">util</a> - contains code shared by multiple demos</li>
<li><a href="../demo/Makefile">Makefile</a> - builds the demos</li>
</ul>
</li>

<li><a href=".">docs</a> - contains documentation for FreeTTS</li>

<li>javadoc.zip - contains complete FreeTTS API documentation; to unzip use '<code>jar xf javadoc.zip</code>'</li>

<li><a href="../lib">lib</a> - contains jar files for FreeTTS 

<ul>
<li>freetts.jar - the core FreeTTS engine</li>

<li>cmuawb.jar - the limited domain voice called alan</li>

<li>cmukal16.jar - the unlimited domain, 16khz voice, called kevin16</li>

<li>cmukal8.jar - the unlimited domain, 8khz voice called kevin</li>

<li>cmulex.jar - the English lexicon</li>

</ul>

<li><a href="../speech.properties">speech.properties</a> - configuration file for JSAPI 1.0 support</li>

<li>tests.zip - contains FreeTTS testsuite, to unzip use '<code>jar xf tests.zip</code>'</li>

<li>src.zip - contains FreeTTS source; to unzip use '<code>jar xf src.zip</code>'</li>
</ul>
</li>
-->

<p>
<li><a name="possible_uses"><b>Possible uses of FreeTTS</b></a></li>

<p>Here are a few possible uses of FreeTTS:
  <ul>
      <p><li><i><b>JSAPI 1.0 Synthesizer.</b></i> FreeTTS provides
      partial support for the <a
      href="http://java.sun.com/products/java-media/speech/">Java
      Speech API</a> (JSAPI) 1.0 specification.
      <p><li><i><b>Remote TTS Server.</b></i> FreeTTS can serve as a back-end text-to-speech engine that works with a speech/telephony system. Our <a href="../demo/freetts/ClientServer">client/server demo</a> shows how this can be done.
      <p><li><i><b>Desktop TTS engine.</b></i> You can use FreeTTS as your workstation/desktop TTS engine. For example, our <a href="../demo/JSAPI/Emacspeak">Emacspeak demo</a> works right out of the box with <a href="http://www.cs.cornell.edu/Info/People/raman/emacspeak/emacspeak.html">Emacspeak</a>.</li>
    </ul>


<p>
<li><a name="acknowledgments"><b>Acknowledgments</b></a></li>
<p>Refer to <a href="../acknowledgments.txt">acknowledgments</a> to see the list of people and organizations we would like to thank for making this project possible. Most of all, we thank our management for letting us do this, and Alan Black and Kevin Lenzo for doing Flite.

    </ul>



<hr>

<h3>Installation</h3>

<p>

<ul>

<li><a name="prerequisites"><b>Prerequisites for building and running FreeTTS</b></a></li>

<p>
<ul>

<p> <li> <b> FreeTTS Source Tree </b> available as a 
<a
href="http://sourceforge.net/project/showfiles.php?group_id=42080&release_id=65759">
compressed tarball </a> or directly from the FreeTTS 
<a href="http://sourceforge.net/cvs/?group_id=42080"> CVS
Repository</a>. The compressed tarball includes ready to run pre-built JAR files
for FreeTTS. </li>
<p> <li><b>Java<sup><font size="-1">TM</font></sup> 2 SDK, Standard Edition, v1.4 Beta 3 </b>, available at <a href="http://java.sun.com">http://java.sun.com</a> - FreeTTS requires the Java 2 SDK, Standard Edition, v 1.4 Beta 3 platform, which was the latest JDK<sup><font size="-1">TM</font></sup> at the time of release of this version of FreeTTS. FreeTTS has been tested on the 
Solaris<sup><font size="-1">TM</font></sup> Operating Environment, 
Linux and Win32 operating systems.</p>

<li> <b> JSAPI 1.0 specification implementation </b> - FreeTTS requires an
implementation of the JSAPI 1.0 specification.  
The JSAPI 1.0 specification implementation (i.e., the javax.speech.*
classes) is not available under a BSD-style license.  Instead, we are
making the binaries available under a separate binary code
license.</br>

<br> <b>Unix Systems </b> - This distribution includes a 
self-extracting shell archive containing the <code>jsapi.jar</code> file.  
If you are running under Linux or the 
Solaris<sup><font size="-1">TM</font></sup> Operating Environment, (or any
other system that supports <code>sh</code>) follow these instructions:
<ol>
    <li> Go to the FreeTTS/lib directory
    <li> Type <code>sh ./jsapi.sh</code> 
    <li> If the binary license agreement is acceptable, accept it by typing "y". The <code>jsapi.jar</code> file will be unpacked and deposited into the lib directory.
</ol>
<br> <b>Win32</b> - This distribution includes an
installer program containing the <code>jsapi.jar</code> file.  
If you are running
on a Win32 Operating system follow these instructions:
<ol>
    <li> Go to the FreeTTS/lib directory
    <li> Type <code> .\jsapi.exe </code>
    <li> If the binary license agreement is acceptable, accept it by
    clicking "I Agree". The <code>jsapi.jar</code> file will be 
    unpacked and deposited into the <code>lib</code> directory.
</ol>

<!-- Since jdk1.4beta3 only works on windows, linux and solaris, there
 are currently no 'other' systems -->

<!--
<br><b> Other Systems</b> - If 
self-extracting shell archives (Win32,
Mac) Follow these steps to get an implementation of the JSAPI 1.0 specification:
<ol>
 	<li> Go to <a href="http://research.sun.com/speech/software">
http://research.sun.com/speech/software</a> 
	<li> Review and accept the license agreement </li>
	<li> Login using the following user name and password</li>
<pre>
    	User Name: 	jsapi 
	Password: 	sunspeech
</pre> </li>
	<li> Download the Java Speech API Utilties (either as 
	<code> jsutils10.tar.Z or jsutils10.zip</code>) </li>
	<li> Uncompress/untar the downloaded file </li>
	<li> Copy the file <code> jsutils/lib/jsapi.jar
	</code> to <code> FreeTTS/lib/jsapi.jar</code> </li>
</ol>
<p>Note that although this JSUtils package contains a large number of
files, the only thing that FreeTTS actually uses from JSUtils is 
the 'jsapi.jar' file.  The JSUtils code is old, and unsupported. The only
reason to download it is to get the jsapi.jar file.  To extract just
the jsapi.jar file you can do the following:
<p>
For the compress tar file:
<pre>

    % zcat jsutils10.tar.Z | tar xvf - jsutils-1.0/jsapi/lib/jsapi.jar
</pre>

For the zip file:
<pre>

    % unzip jsutils10.zip  jsutils-1.0/jsapi/lib/jsapi.jar
</pre>

Once you have extracted jsapi.jar copy it to the <code>FreeTTS/lib</code>
directory:

<pre>
    cp jsutils-1.0/jsapi/lib/jsapi.jar FreeTTS/lib/jsapi.jar
</pre>
-->



</li>

<p><li><b>GNU Make version 3.79</b> or higher, available at <a href="http://www.gnu.org">http://www.gnu.org</a> - The demos can be easily run from makefiles. These makefiles require a recent version of GNU Make. We have tested with GNU Make version 3.79.

<p><li><b>JUnit Version 3.7</b> <i>(Testing only)</i>, available at <a href="http://www.junit.org">http://www.junit.org</a> - JUnit is only needed if you intend to run the unit tests included with FreeTTS.</li>

<p><li><b> UNIX Scripting tools </b> <i>(Testing only)</i> - The
regression tests use a number of UNIX tools including: <code>sed, awk, diff,</code> and <code>wc</code>.

<p><li><b>Install speech.properties</b> - Copy the
<b>speech.properties</b> file from the top level directory to your
home directory. This step is required for JSAPI demos and applications.

<p><li> <b> Set JAVA_HOME </b> - Set the <code><b>JAVA_HOME</b></code> environment 
variable to point to your JDK directory (e.g.  /usr/java/j2sdk1.4.0beta3).
</li>

</ul>

<p>
<li><a name="how_build"><b>Building FreeTTS</b></a></li>

<p>Since the distribution comes with compiled class files, you normally do not have to rebuild it. If you do want to rebuild it, follow these steps:

<p>
<ol>
<li>Make sure that you have the proper version of the Java 2 Platform, Standard Edition, and GNU Make.</li>
<p>
<li>Unpack the sources with the command: 

<pre>
    % jar xf src.zip
</pre>
</li>

<li>Build the FreeTTS engine and the demos with command:

<pre>
    % gmake all
</pre>


<li>The output class files are placed in the 'classes' directory.</li>
</ul>
<p>
<i>Note that you make receive complaints about missing directories if
you build the sources without unpacking  the 'tests.zip' 
file as well (See below).  The complaints are harmless.</i>
</li>


</li>


<p><li><a name="how_test"><b>Testing FreeTTS</b></a></li>

<p>FreeTTS includes a number of unit and regression tests. The unit tests verify that critical routines are working properly. The regression tests verify that the output of FreeTTS matches what is expected. The unit tests require a package called JUnit.</p>
<p>
<blockquote>
<b>NOTE</b>
The regression tests also make use of a standard set of UNIX utilities such as
<code>sed</code>, <code>awk</code>, <code>diff</code> and <code>wc</code>. They are typically not available on a vanilla Win32 system. Therefore, the regression tests are not usually run on a Win32 system.
</blockquote>

<p>To verify that your FreeTTS source was built properly, follow these steps:</p>

<ol>
<li>Make sure that you have the proper version of the Java 2 Platform, Standard Edition, and GNU Make.</li>

<li>Make sure that you have JUnit version 3.7 or later installed (available at <a href="http://www.junit.org">http://www.junit.org</a>).</li>

<li>Build at least the 'com' portion of the tree (see previous section, "Building FreeTTS").</li>

<li>Unpack the tests with the command: 

<pre>
    % jar xf tests.zip
</pre>
</li>

<li>Edit <code>build/Config.dos</code> and/or <code>build/Config.unix</code> to set the environment variable <code>JUNIT_HOME</code> to point to the directory that contains the junit.jar file, or just set your <code>JUNIT_HOME</code> environment variable.</li>

<li>Execute the test with the following commands: 

<pre>
     % cd tests
     % gmake alltests
</pre>

<li>The test output should look like this:</li>

<pre>
................
Time: 27.852

OK (16 tests)



./utteranceTest.sh
              Unit 0 differences of 3538. Test Passed.
        target_end 0 differences of 3538. Test Passed.
                 f0  differences of 1462. Test Passed.
             accent 0 differences of 374. Test Passed.
            stress 0 differences of 1362. Test Passed.
           Segment 0 differences of 1790. Test Passed.
       SylStructure 0 differences of 522. Test Passed.
               Word 0 differences of 522. Test Passed.
             Phrase 0 differences of 146. Test Passed.
              Token 0 differences of 515. Test Passed.
               pos 0 differences of 1462. Test Passed.
            endtone 0 differences of 276. Test Passed.
./utteranceTimeTest.sh
                Unit 0 differences of 41. Test Passed.
          target_end 0 differences of 41. Test Passed.
                   f0  differences of 35. Test Passed.
               accent 0 differences of 8. Test Passed.
              stress 0 differences of 30. Test Passed.
             Segment 0 differences of 41. Test Passed.
        SylStructure 0 differences of 12. Test Passed.
                Word 0 differences of 12. Test Passed.
               Phrase 0 differences of 5. Test Passed.
               Token 0 differences of 12. Test Passed.
                 pos 0 differences of 35. Test Passed.
             endtone 0 differences of 10. Test Passed.
            file_pos 0 differences of 12. Test Passed.

0 lines in lpctest.diff file. See lpctest.res for the LPC residual file.
0 samples differ in timeTest.wave
0 lines in wavetest.diff file. See wavetest.res for the wave file.
</pre>
    <li> To run just the unit tests, use the following commands: </li>
    <p>
     <pre>
         % cd tests
	 % gmake tests
     </pre>
    <p>
    <li> The output should look like this: </li>
    <p>
    <pre>
    ................
    Time: 27.852
    OK (16 tests)
    </pre>
    <p>
</li>
</ul>
</ul>
</ul>



<hr>

<h3>Demos</h3>

<ul>
<p><li><a name="run_demo"><b>How do I run the demos?</b></a></li>
<p>
<li style="list-style: none">
<p>FreeTTS includes a number of demos. Each demo directory has Java source file(s) containing the demo source, a Makefile that will build and run the demo, and a 'README.html' file with brief instructions as to how to run the demo. Each demo is described briefly here:</p>

<ul>
<li><a
href="../demo/JSAPI/HelloWorld/README.html"><b>JSAPI/HelloWorld</b></a>
- a program that uses the JSAPI 1.0 Synthesis interface to speak "Hello, World".</li>

<li><a
href="../demo/JSAPI/MixedVoices/README.html"><b>JSAPI/MixedVoices</b></a>
- a program that demonstrates using multiple voices and speech
synthesizers in a coordinated fashion using JSAPI 1.0</li>

<li><a href="../demo/JSAPI/Player/README.html"><b>JSAPI/Player</b></a>
- a Swing-based GUI that allows the user to monitor and manipulate a
JSAPI 1.0 Speech Synthesizer.</li>

<li><a href="../demo/JSAPI/JTime/README.html"><b>JSAPI/JTime</b></a> - a JSAPI program that uses a limited-domain, high quality voice to tell the time.</li>

<li><a
href="../demo/JSAPI/Emacspeak/README.html"><b>JSAPI/Emacspeak</b></a>
- a program that uses JSAPI 1.0 to provide a text-to-speech server for Emacspeak.</li>

<li><a href="../demo/freetts/HelloWorld/README.html"><b>freetts/HelloWorld</b></a> - a low-level (non-JSAPI) program that speaks a greeting to the world.</li>

<li><a href="../demo/freetts/ClientServer/README.html"><b>freetts/ClientServer</b></a> - a low-level (non-JSAPI) socket-based TTS server with sample clients written in the C programming language and the Java programming language.</li>
</ul>

<p>Typically, unless it is a client/server demo, just typing "gmake run" should run the demo

<p><b>Important</b> <i>Be sure to copy the
'<code>speech.properties</code>' file to your home directory before
running the demos that use JSAPI 1.0. If you are not sure where to copy this file, try running one of the JSAPI demos. If the demo cannot find the 'speech.properties' file, it will tell you where you should put it.</i></p>


</li>

</ul>



<hr>

<h3>Documentation</h3>

<ul class="noindent">

<p><li><a name="freetts_api"><b>API documentation</b></a></li>
<p>
The  <a href="./api/index.html">FreeTTS API Documentation</a> contains the
engine documentation. Note that if this link is broken, you probably have not unpacked the javadoc.zip file. Unpack with "<code>jar xf javadoc.zip</code>".

<p><li><a name="writing_software"><b>Writing software with FreeTTS</b></a></li>
<p>
We recommend that you use the <a
href="http://java.sun.com/products/java-media/speech/forDevelopers/jsapi-doc/index.html">
Java Speech API (JSAPI) 1.0</a> to interface to FreeTTS. The JSAPI interface provides the best method of controlling and using FreeTTS. The JSAPI demos provide a set of examples that show how to select a
FreeTTS synthesizer and make it speak.

</ul>



<hr>

<h3>Frequently Asked Questions</h3>
<ul>

<p>
<li><a name="why_jdk1.4"><b>Why must I use Java 2 SDK, Standard Edition, v 1.4?</b></a></li>
<p>Some of the many compelling reasons to use Java 2 SDK, Standard Edition, v 1.4. are:

<p>
<ul>

<p>
<li><b>New IO package</b> - Java 2 SDK, Standard Edition, v 1.4 provides a new IO (<code><b>java.nio</b></code>) package that provides memory mapped file I/O. This package drastically reduces the load times of the FreeTTS databases.

<p>
<li><b>Regular expressions</b> - Java 2 SDK, Standard Edition, v 1.4 provides a new package for regular expression matching (<code><b>java.util.regex</b></code>). They are used in the FreeTTS text normalization step.</li>

<p>
<li><b>Assert Facility</b> - Java 2 SDK, Standard Edition, v 1.4 added the new <code>assert</code> keyword to ensure that certain conditions are satisfied before continuing execution. FreeTTS uses this keyword in all stages of speech synthesis.</li>

<p>
<li><b>Compiler Optimizations</b> - Java 2 SDK, Standard Edition, v 1.4 has numerous compiler optimizations that produce faster and more compact code. For example, with the <code><b>-server</b></code> switch, byte codes are optimized to eliminate bounds checking on array accesses whenever possible.</li>

</ul>


<p>
<li><a name="performance"><b>How does FreeTTS perform?</b></a></li>

<p>We compared the performance of FreeTTS with that of Flite (original C version) on a machine with this configuration:
<p>
<ul>
<li>single 296MHz CPU SPARC v9 processor
<li>Solaris<sup><font size="-1">TM</font></sup> 8 in 64-bit mode
<li>Java 2 SDK, Standard Edition, v 1.4 Beta 3
</ul>

<p>We rendered Chapter One of <i>Alice's Adventures in Wonderland</i> by Lewis Carroll using both Flite and FreeTTS. The results are summarized below:

<p><table border="1" cellspacing="0" cellpadding="1" width="60%">
<tr><td></td><td bgcolor="#ccccee"><b>Flite</b></td><td  bgcolor="#ccccee"><b>FreeTTS</b></td></tr>
<tr><td bgcolor="#ccccee">Load Time</td><td>0s</td><td>3.4s</td></tr>
<tr><td bgcolor="#ccccee">Processing Time</td><td>44s</td><td>24.1s</td></tr>
<tr><td bgcolor="#ccccee"><b>Total</b></td><td><b>44s</b></td><td><b>27.5s</b></td></tr>
</table>

<p>With a sentence of average length (using the alice test), the time to first sound, disregarding loading times, is about 0.05 seconds.

<p>
<li><a name="why_sound_bad"><b>Why does the diphone synthesizer sound so bad?</b></a></li>
<p>
FreeTTS uses the same algorithms and voice data from Flite. Here is what the
Flite README says about voice quality:

<blockquote>
``<i>So you've eagerly downloaded flite, compiled it and run it, now you
are disappointed that is doesn't sound wonderful, sure its fast and
small but what you really hoped for was the dulcit tones of a deep
baritone voice that would make you desperately hang on every phrase it
sang.  But instead you get an 8Khz diphone voice that sounds like it
came from the last millenium.
<p>
Well, first, you are right, it is an 8KHz diphone voice from the last
millenium, and that was actually deliberate.  As we developed flite we
wanted a voice that was stable and that we could directly compare with
that very same voice in Festival.  Flite is an *engine*.  We want to
be able take voices built with the FestVox process and compile them
for flite, the result should be exactly the same quality (though of
course trading the size for quality in flite is also an option).  The
included voice is just an sample voice that was used in the testing
process.  We have better voices in Festival and are working on the
conversion process to make it both more automatic and more robust and
tunable, but we haven't done that yet, so in this first beta release.
This old poor sounding voice is all we have, sorry, we'll provide you
with free, high-quality, scalable, configurable, natural sounding
voices for flite, in all languages and dialects, with the tools to
built new voices efficiently and robustly as soon as we can.  Though
in the mean time, a few higher quality voices will be released with
the next version.</i>''
</blockquote>



<p>
<li><a name="why_alan_lalala"><b>Why does the 'alan' voice say "lalalala"?</b></a></li>

<p>
The alan voice is a limited domain cluster unit voice. It can only say words that are within its domain, i.e., words that tell the time, for example, numbers. Words that are not within its domain will be pronounced as "lalala...".



<p>
<li><a name="output_to_file"><b>How do I output synthesized speech to an audio file?</b></a></li>

<p>
With <code>FreeTTS</code> (the class), you can dump audio output to a file using the <code>-dumpAudio</code> option:

<p><code><b>-dumpAudio filename</b></code>

<p>The audio file format can be .wav, .au, or .aif, depending on the file name. For example, if <code>"filename"</code> is "foo.au" the file format will be .au. 
<p>The <code><b>-dumpMultiAudio</b></code> option (same format as <code>-dumpAudio</code>) dumps audio to multiple audio files, one file per utterance. In this case, if <code>"filename"</code> is "foo.wav", the files are named foo0.wav, foo1.wav, foo2.wav, etc.. Again, the file format is determined by the extension of the filename.

<p>If you are writing your own application, you can use the following classes for audio output to a file:

<p>
<code>
freetts/com/sun/speech/freetts/audio/SingleFileAudioPlayer.java
freetts/com/sun/speech/freetts/audio/MultiFileAudioPlayer.java
</code>

<p>
<li><a name="voices_available"><b>What voices are available?</b></a></li>

<p>Currently, the distribution comes with these 3 voices:
<p>
<ul>
<li>a low quality, unlimited domain, 8kHz diphone voice, called kevin
<li>a medium quality, unlimited domain, 16kHz diphone voice, called kevin16
<li>a high quality, limited domain, 16kHz cluster unit voice, called alan

</ul>


<p>
<li><a name="is_full_jsapi"><b>Does FreeTTS provide full 
support the JSAPI 1.0 specification?</b></a></li>

<p>No. Since FreeTTS is a speech synthesis system, none of the JSAPI
1.0 Recognition interfaces are supported. In addition, FreeTTS
supports only a subset of the JSAPI 1.0 javax.speech.synthesis specification.   The FreeTTS support for JSAPI 1.0 has the following restrictions:</p>

<ul>
<li>JSML Speech Markup is ignored. FreeTTS JSAPI will process JSML, but currently does not apply the markup to the generated speech.</li>

<li>FreeTTS does not currently generate the <code>WORD_STARTED</code> or the <code>MARKER_REACHED</code> events.</li>

<li>Vocabulary management is not supported.</li>

<li>The <code>Synthesizer.phoneme()</code> method is not implemented.</li>

<li>PropertyVeto exceptions are not always properly thrown when property change requests are rejected or constrained.</li>
</ul>
<p>
Note that the JSAPI specification is undergoing changes.  The official work being done
on JSAPI is now for JSAPI 2.0 via the Java Community Process (JCP)
under JSR-113.  Read more about the JCP and JSR-113 at
<a href="http://www.jcp.org">http://www.jcp.org.</a>
</li>


<p>
<li><a name="import_voice_data"><b>How do I import new voice data from
Festival or Flite?</b></a></li><p>
There are a set of tools that will allow the easy importation of voice
and lexicon data from Flite to FreeTTS.  These tools are not included
in this release of FreeTTS. Future releases may include these tools.


<p>
<li><a name="linux_sound"> <b>The demos are crashing when I run on
Linux, how come?</b></a></li>

<p>
Your sound drivers may need updating. Certain Linux configurations
(particularly, Red Hat Linux with Sound Blaster Live sound cards) do
not work properly with Java<sup><font size="-1">TM</font></sup> Sound unless the drivers are updated.  See
these Bug Parade reports for more details: 
 
 <a
 href="http://developer.java.sun.com/developer/bugParade/bugs/4427864.html">4427864</a>
 and
 <a
 href="http://developer.java.sun.com/developer/bugParade/bugs/4498848.html">4498848</a>.


<p>
<li><a name="no_jsapi"><b>Why do I get a NoClassDefFoundError when I try to run a
demo?</b></a></li>
<p>
You probably need to install the JSAPI 1.0 specification implementation. See 
<a href="#prerequisites">Prerequisites for building and running FreeTTS</a>
for more details.

<p>
<li><a name="old_java"><b>Why do I get an
UnsupportedClassVersionError  when I try to run a demo?</b></a></li>
<p>
You probably are trying to run with an older (pre jdk1.4 beta3)
version of the java runtime. To verify this type:
<pre>
% java -version
</pre>

You should see something like: java version "1.4.0-beta3". If you see
something older that this, such as <code> java version "1.2.2" </code>
then you are indeed running with an older version of the java runtime.
See <a href="#prerequisites">Prerequisites for building and running
FreeTTS</a>
for more details on what is needed to run FreeTTS.

<p>
<li><a name="where_is_recognizer"><b>Where is the speech recognizer?</b></a></li>

<p>
This is an implementation of a speech synthesizer and does not include a speech
recognizer.  Please keep your eye on the 'cmusphinx' project on 
<a href="http://sourceforge.net/projects/cmusphinx/">SourceForge</a>
for developments in this area.

</ul>


<hr>
See the <a href="../license.terms">license terms</a> and <a href="../acknowledgments.txt">acknowledgments</a>.<br>
Copyright 2001 Sun Microsystems, Inc. All Rights Reserved. Use is subject to license terms.</li>
</ul>
</body>
</html>

